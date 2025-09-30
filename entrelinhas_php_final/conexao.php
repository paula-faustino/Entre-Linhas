<?php
$servidor = "localhost"; // geralmente "localhost"
$usuario = "root";       // seu usuário do MySQL
$senha = "root";             // sua senha do MySQL
$banco = "entrelinhas";  // o banco criado no contato.sql

$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

