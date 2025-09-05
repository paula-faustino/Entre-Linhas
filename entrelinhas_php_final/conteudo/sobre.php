<section id="sobre-nos">
  <h2>Sobre Nós</h2>
  <p>O projeto foi desenvolvido por Emilly Magela, Paula Faustino, Mayara Santana e Suzan Marry como TCC do curso de Desenvolvimento de Sistemas.</p>
  <p><strong>Equipe:</strong></p>
  <ul>
    <li>Suzan Marry – Criação do site com HTML, JavaScript e CSS, design visual acessível.</li>
    <li>Emilly Magela – Apoio na documentação e coleta de informações para o site.</li>
    <li>Paula Faustino – Gerenciamento do Instagram e produção de conteúdo.</li>
    <li>Mayara Santana – Layout, design e pesquisa de conteúdo do aplicativo.</li>
  </ul>
</section>
<button class="dark-toggle">Modo Escuro</button>
  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });