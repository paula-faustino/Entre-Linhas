<?php
// contato.php
?>
<section>
  <div>
    <h2>Entre Em Contato Conosco</h2>
    <p>Este espaço foi criado para oferecer acolhimento, troca de experiências e esclarecimento de dúvidas a pessoas com dislexia, bem como a familiares, educadores e demais interessados no tema.</p>
    <p>A dislexia é um transtorno real, que impacta diretamente o processo de aprendizagem, exigindo compreensão, respeito e estratégias adequadas de apoio.
      Aqui, buscamos promover a conscientização, dar visibilidade às dificuldades enfrentadas diariamente e valorizar cada relato como parte essencial dessa construção coletiva.
   </p>
    <p>Nosso compromisso é fortalecer a inclusão, disseminar informações falsas e criar um ambiente seguro para diálogo e aprendizado.</p>
  </div>
</section>

<section class="form-container">
  <h2>Envie seu Comentário</h2>
  <form id="form-contato">
    <input type="text" name="nome" placeholder="Seu nome" required />
    <textarea name="comentario" placeholder="Escreva seu comentário" rows="5" required></textarea>
    <button type="submit">Enviar</button>
  </form>

  <div class="success-message" id="mensagem-sucesso">
    Mensagem enviada com sucesso! Você será redirecionado em instantes...
    <br><br>
    <button onclick="window.location.href='index.php'">Voltar agora</button>
  </div>
</section>

 <button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>


<script>
  const form = document.getElementById("form-contato");
  const mensagem = document.getElementById("mensagem-sucesso");

  // Esconde a mensagem inicialmente
  mensagem.style.display = "none";

  if(form){
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const dados = new FormData(form);

      fetch("enviar.php", {
        method: "POST",
        body: dados
      })
      .then(res => res.text())
      .then(response => {
        // Mostra a mensagem de sucesso
        mensagem.style.display = "block";

        // Limpa o formulário
        form.reset();

        // Redireciona após 3 segundos
        setTimeout(() => {
          window.location.href = '../index.php';
        }, 3000);
      })
      .catch(err => {
        alert("Erro ao enviar. Tente novamente.");
        console.error(err);
      });
    });
  }

  // Modo escuro
  const toggle = document.querySelector('.dark-toggle');
  toggle.addEventListener('click', () => {
    document.body.classList.toggle('modo-escuro');
  });
</script>

<style>
  .success-message { display: none; color: green; margin-top: 20px; }
  .modo-escuro { background-color: #222; color: #eee; }
</style>
