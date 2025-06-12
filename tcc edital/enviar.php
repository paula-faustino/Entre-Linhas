<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "entrelinhas";

$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST["nome"];
$comentario = $_POST["comentario"];

$sql = "INSERT INTO contatos (nome, comentario) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $comentario);
$stmt->execute();
$stmt->close();
$conn->close();
?>
