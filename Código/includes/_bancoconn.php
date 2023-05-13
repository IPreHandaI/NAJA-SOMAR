<?php

$servername = "localhost";
$database = "somar";
$username = "root";
$password = "";

// Criar uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar se a conexão foi bem sucedida
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verificar se um botão foi clicado
if (isset($_GET["butao"])) {
  $ido = $_GET["butao"];





  // Consulta SQL para obter a imagem do botão clicado
  $sql = "SELECT Imagem FROM ods WHERE odsid = $ido";
  $resultado = mysqli_query($conn, $sql);

  if ($row = mysqli_fetch_assoc($resultado)) {
    echo '<img src="'.$row['Imagem'].'">';
  } else {
    echo 'Nenhuma imagem encontrada para o botão selecionado.';
  }
} else {
  $sql = "SELECT odsid, Imagem, Sobre FROM ods";
  $resultado = mysqli_query($conn, $sql);
}


$sql2 = "SELECT projetosid, Nome, Descricao FROM projetos";
$resultado2 = mysqli_query($conn, $sql2);

?>
