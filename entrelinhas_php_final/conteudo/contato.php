<?php
include("../conexao.php");

$sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $comentario = $_POST['comentario'] ?? '';

    if (!empty($nome) && !empty($comentario)) {
        $stmt = $conn->prepare("INSERT INTO contatos (nome, comentario) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome, $comentario);

        if ($stmt->execute()) {
            $sucesso = true;
        }

        $stmt->close();
    }
}

$conn->close();
?>

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
      Mensagem enviada com sucesso!
      <br><br>
      <button onclick="window.location.href='index.php'">Voltar agora</button>
    </div>
  <?php else: ?>
    <form id="form-contato" method="POST" action="">
      <input type="text" name="nome" placeholder="Seu nome" required />
      <textarea name="comentario" placeholder="Escreva seu comentário" rows="5" required></textarea>
      <button type="submit">Enviar</button>
    </form>
  <?php endif; ?>
</section>

<button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

<script>
  function toggleDarkMode() {
    document.body.classList.toggle('modo-escuro');
  }
</script>

<style>
  .success-message { display: block; color: green; margin-top: 20px; }
  .modo-escuro { background-color: #222; color: #eee; }
</style>
