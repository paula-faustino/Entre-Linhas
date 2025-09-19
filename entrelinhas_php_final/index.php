<?php

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EntreLinhas</title>
  <link rel="stylesheet" href="styles.css" />
  <style>

    html {
      scroll-behavior: smooth;
    }
    .modo-escuro {
      background-color: #1a1a1a;
      color: white;
    }
    .modo-escuro section,
    .modo-escuro .hero-content {
      background-color: #333 !important;
      color: white !important;
    }
    .modo-escuro a,
    .modo-escuro button {
      color: white !important;
    }
.dark-toggle {
  background: #ccc;
  color: #000;
  border: none;
  padding: 10px 15px;
  border-radius: 8px;
  font-weight: bold;
  cursor: pointer;
  margin-top: 2rem; 
}

    .hero h1 {
      font-family: 'OpenDyslexic', Arial, sans-serif;
      font-size: 48px;
    }
    .hero .subtext {
      font-size: 20px;
      margin-top: 10px;
      color: #000000aa;
    }
    .final-chamada {
      background: #d2f3ff;
      padding: 40px;
      margin: 50px auto;
      border-radius: 20px;
      max-width: 900px;
      text-align: center;
      box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
    }
    .final-chamada h3 {
      margin-bottom: 20px;
      font-size: 24px;
    }
    .btn-play {
      background-color: #87c6d6;
      color: black;
      padding: 12px 25px;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      text-decoration: none;
    }
    .hero-content{
      
    }
    

  </style>

</head>
<body>

  <button id="btn-ler-tudo" aria-label="Ler todo o conteúdo da página">Ler Tudo</button>

<header>
  <div class="brand">
    <img src="imagems/coruja.png" alt="Logo" class="log-imag">
    <h1 class="titulo">EntreLinhas</h1>
  </div>
      <nav>
        <ul>
        <li><a href="index.php">Início</a></li>
          <li><a href="#dislexia" data-page="dislexia.php">Dislexia</a></li>
          <li><a href="#sobre-nos" data-page="sobre.php">Sobre Nós</a></li>
          <li><a href="#servicos" data-page="servicos.php">Serviços</a></li>
          <li><a href="#identificar" data-page="identificar.php">Identificar</a></li>
          <li><a href="#contato" data-page="contato.php">Contato</a></li>
          <li><a href="#profissionais" data-page="profissionais.php">Profissionais</a></li>
        </ul>
      </nav>
  </header>

  <main id="conteudo">

<!-- conteudo da pagina -->
<section>
        <div class="hero-content">
          <h1>EntreLinhas</h1>
          <p class="subtext">Organizando ideias para quem vê o mundo de forma única</p>
          <p>Site voltado para auxiliar nas informações sobre a dislexia.</p>
        </div>
</section>
        
<section id="sobre-site">
      <h2>Sobre o Site</h2>
      <p>Nosso aplicativo foi criado para auxiliar pessoas com dislexia em seus processos de aprendizagem. Ele apresenta diferentes níveis de interação adaptados ao tipo de dislexia, permitindo um suporte personalizado e eficaz.</p>
</section>

<!--botão modo escuro-->
<script>
  const toggle = document.querySelector('.dark-toggle');

  // quando clicar no botão
  toggle.addEventListener('click', () => {
    document.body.classList.toggle('modo-escuro');

    // salva no navegador
    if (document.body.classList.contains('modo-escuro')) {
      localStorage.setItem('theme', 'dark');
    } else {
      localStorage.setItem('theme', 'light');
    }
  });

  // quando recarregar ou mudar de aba do conteudo
  window.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('theme') === 'dark') {
      document.body.classList.add('modo-escuro');
    }
  });
</script>

   

  <script src="script.js"></script>
  
  <button class="dark-toggle">Modo Escuro</button>
  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });
  </script>
</body>
</html>
