 <main id="conteudo">
    <section class="hero">
      <div class="hero-content">
        <h1>EntreLinhas</h1>
        <p class="subtext">Organizando ideias para quem vê o mundo de forma única</p>
        <p>Site voltado para auxiliar nas informações sobre a dislexia.</p>
      </div>
    </section>
    
<section id="sobre-app">
  <h2>Sobre o Site</h2>
  <p>Nosso aplicativo foi criado para auxiliar pessoas com dislexia em seus processos de aprendizagem. Ele apresenta diferentes níveis de interação adaptados ao tipo de dislexia, permitindo um suporte personalizado e eficaz.</p>
</section>
<button class="dark-toggle">Modo Escuro</button>
  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });