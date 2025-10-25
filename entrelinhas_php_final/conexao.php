<?php
$host = "localhost";   // servidor
$user = "root";        // usuário do MySQL (padrão no XAMPP)
$pass = "";            // senha (normalmente vazia no XAMPP, mas se você definiu coloque aqui)
$db   = "entrelinhas"; // nome do banco que você criou

$conn = new mysqli($host, $user, $pass, $db);

// Verifica se deu erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
