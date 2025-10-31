<?php
include("../conexao.php");

// inicializa a flag de sucesso
$sucesso = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $comentario = $_POST['comentario'] ?? '';

    if (!empty($nome) && !empty($comentario)) {
        $sql = "INSERT INTO contatos (nome, comentario) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $nome, $comentario);

            if ($stmt->execute()) {
                // define flag de sucesso
                $sucesso = true;
            }

            $stmt->close();
        }
    }
}

$conn->close();
?>
<head>
  <meta charset="UTF-8">
  <title>Entre em Contato</title>
  <link rel="stylesheet" href="../styles.css">
</head>

<section>
  <div>
    <h2>Entre Em Contato Conosco</h2>
    <p>Este espaço foi criado para oferecer acolhimento, troca de experiências e esclarecimento de dúvidas a pessoas com dislexia, bem como a familiares, educadores e demais interessados no tema.</p>
    <p>A dislexia é um transtorno real, que impacta diretamente o processo de aprendizagem, exigindo compreensão, respeito e estratégias adequadas de apoio.
      Aqui, buscamos promover a conscientização, dar visibilidade às dificuldades enfrentadas diariamente e valorizar cada relato como parte essencial dessa construção coletiva.
   </p>
    <p>Nosso compromisso é fortalecer a inclusão, combater informações falsas e criar um ambiente seguro para diálogo e aprendizado.</p>
  </div>
</section>

<section class="form-container">
  <h2>Envie seu Comentário</h2>

  <?php if ($sucesso): ?>
    <div class="success-message" id="mensagem-sucesso">
      <p>✅ Mensagem enviada com sucesso!</p>
    </div>
  <?php endif; ?>

 <form method="POST" action="conteudo/contato.php">
    <input type="text" name="nome" placeholder="Seu nome" required />
    <textarea name="comentario" placeholder="Escreva seu comentário" rows="5" required></textarea>
    <button type="submit" class="btn-enviar">Enviar</button>
  </form>
</section>

<button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

<script>
  function toggleDarkMode() {
    document.body.classList.toggle('modo-escuro');
  }
</script>

<style>
  .form-container {
    margin-top: 20px;
    padding: 15px;
  }

  .success-message {
    background: #e6ffed;
    border: 1px solid #a5d6a7;
    color: #2e7d32;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-weight: bold;
    text-align: center;
  }

  .modo-escuro {
    background-color: #222;
    color: #eee;
  }
</style>
