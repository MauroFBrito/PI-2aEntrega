<?php
$servername = "seu_servidor.mysql.database.azure.com";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Define charset para evitar problemas com acentuação
$conn->set_charset("utf8");
?>