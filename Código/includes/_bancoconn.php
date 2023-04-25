<?php
$servername = "localhost";
$database = "somar";
$username ="root";
$password = "";

$conn = mysqli_connect("localhost", "username", "password", "somar");

// Recupere a imagem do banco de dados MySQL
$sql = "SELECT image FROM ods WHERE id = 1";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);
?>