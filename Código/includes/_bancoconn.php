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

// Consulta SQL para obter as informações das imagens
$sql = "SELECT odsid, Imagem FROM ods";

$resultado = mysqli_query($conn, $sql);

// Exiba as imagens em um formulário HTML


mysqli_close($conn);
?>
