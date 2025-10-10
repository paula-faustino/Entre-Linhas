<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EntreLinhas</title>

  <!-- ✅ Adicionado -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

 
    /* ====== MENU PRINCIPAL ====== */
.menu {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  gap: 20px;
}

.menu li {
  position: relative;
}

.menu a {
  text-decoration: none;
  color: #f8f0f0ff;
  font-weight: 600;
  padding: 10px 15px;
  display: block;
}

/* ====== DROPDOWN ====== */
.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #87c6d6;
  min-width: 200px;
  border-radius: 4px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.15);
  z-index: 100;
}

.dropdown-content li a {
  color: white;
  padding: 12px 15px;
  font-weight: 500;
}

.dropdown-content li a:hover {
  background-color: #004c80;
}

/* Mostrar submenu quando passar o mouse */
.dropdown:hover .dropdown-content {
  display: block;
}


/* ===== AJUSTE DO TAMANHO DO CARROSSEL ===== */
#carouselExample {
  max-width: 700px;  /* 🔹 largura máxima menor */
  margin: 30px auto; /* 🔹 centraliza o carrossel */
  border-radius: 12px;
  overflow: hidden;  /* 🔹 impede imagens de ultrapassar o contorno */
}

/* 🔹 Tamanho da imagem do carrossel */
#carouselExample img {
  height: 315px;     /* 🔹 altura reduzida da imagem */
  object-fit: cover; /* 🔹 mantém proporção sem distorcer */
  border-radius: 12px;
}

/* 🔹 Tamanho e aparência das setas de navegação */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  width: 25px;   /* largura menor */
  height: 25px;  /* altura menor */
  background-size: 100% 100%;
  filter: invert(100%); /* 🔹 deixa as setas brancas visíveis em imagens escuras */
}

/* 🔹 Reduz o tamanho da legenda dentro do carrossel */
.carousel-caption {
  background: rgba(0, 0, 0, 0.5);
  padding: 15px 20px;
  border-radius: 8px;
}

.carousel-caption h1 {
  font-size: 22px; /* título menor */
}

.carousel-caption p {
  font-size: 16px; /* texto menor */
}

.carousel-caption a.btn {
  font-size: 14px;
  padding: 8px 16px;
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
    <ul class="menu">
      <li><a href="index.php">Início</a></li>

      <!-- MENU DROPDOWN DE DISLEXIA -->
      <li class="dropdown">
        <a href="#dislexia" data-page="dislexia.php">Dislexia ▾</a>
        <ul class="dropdown-content">
          <li><a href="oque-e-dislexia.php">O que é Dislexia</a></li>
          <li><a href="tipos-dislexia.php">Tipos de Dislexia</a></li>
           <li><a href="#identificar" data-page="identificar.php">Como Identificar</a></li>
           <li><a href="#Pessoas" date-page="Conteudo/PessoasC.php">Pessoas com Dislexia</a></li>
        </ul>
      </li>

      <li><a href="#sobre-nos" data-page="sobre.php">Sobre Nós</a></li>
      <li><a href="#servicos" data-page="servicos.php">Serviços</a></li>
      <li><a href="#contato" data-page="contato.php">Contato</a></li>
      <li><a href="#profissionais" data-page="profissionais.php">Profissionais</a></li>
    </ul>
  </nav>
</header>

  <main id="conteudo">

<!-- conteudo da pagina -->
 

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active"> <!-- ✅ adicionado 'active' -->
    <img src="imagems/PessoasC.png" class="d-block w-100" alt="Entenda a Dislexia">
      <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <h1 class="fw-bold text-white">Entenda a Dislexia</h1>
        <p class="fs-5">Veja os principais tipos e métodos de apoio ao aprendizado</p>
        <a href="conteudo/PessoasC.php" class="btn btn-success btn-lg">SAIBA MAIS</a>
      </div>
    </div>

  </div>

  <!-- Botões de navegação -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


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

</div>
<button class="carousel-control-prev" ...></button>
<button class="carousel-control-next" ...></button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
  
  <button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });
  </script>
</body>
</html>
