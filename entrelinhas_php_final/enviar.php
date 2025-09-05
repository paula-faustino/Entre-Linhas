<?php
// Configuração do banco
$servidor = "localhost";
$usuario  = "root";
$senha    = "root"; // XAMPP normalmente vazio
$banco    = "entrelinhas";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe dados do POST
$nome = $_POST['nome'] ?? '';
$comentario = $_POST['comentario'] ?? '';

if($nome && $comentario){
    $stmt = $conn->prepare("INSERT INTO comentarios (nome, comentario) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $comentario);

    if($stmt->execute()){
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Preencha todos os campos!";
}

$conn->close();
?>
