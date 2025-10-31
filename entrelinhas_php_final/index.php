<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EntreLinhas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="styles.css" />
<style>
 
    .carousel-item,
    .carousel-inner {
      background-color: #eee4ca !important;
    }

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
      z-index: 1000;
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
      z-index: 1000;
    }

    .dropdown-content li a {
      color: white;
      padding: 12px 15px;
      font-weight: 500;
      z-index: 1000;
    }

    .dropdown-content li a:hover {
      background-color: #004c80;
      z-index: 1000;
    }

    /* Mostrar submenu quando passar o mouse */
    .dropdown:hover .dropdown-content {
      display: block;
      z-index: 10000;
    }


    /* ===== AJUSTE DO TAMANHO DO CARROSSEL ===== */

    .carousel-item img {
      object-fit: cover;  /* evita sobras */
      width: 100%;
      height: auto;
    }

    #carouselExample {
      max-width: 1000px;  /* 🔹 largura máxima menor */
      margin: 30px auto; /* 🔹 centraliza o carrossel */
      border-radius: 12px;
      overflow: hidden;  /* 🔹 impede imagens de ultrapassar o contorno */
    }

    /* 🔹 Tamanho da imagem do carrossel */
    #carouselExample img {
      height: 460px;     /* 🔹 altura reduzida da imagem */
      object-fit: cover; /* 🔹 mantém proporção sem distorcer */
      border-radius: 10px;
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
    .carousel-caption a.btn {
      font-size: 14px;
      padding: 8px 16px;
    }
    .btn {
      background-color: #87c6d6;
      color: #003d7a;
      box-shadow: 0 2% 4% rgba(0, 0, 0, 0.2); 
      transition: all 0.3s ease;
    }
    .bonito {
    display: inline-block;
    background-color: #5dafc4ff; /* cor principal */
    color: white;
    text-decoration: none;
    padding: 8px 16px; /* tamanho do botão */
    border-radius: 25px; /* deixa redondinho */
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
  }
  .sec-imag {
  width: 60%;        /* diminui o tamanho — pode ajustar (ex: 50%, 40%) */
  max-width: 900px;  /* impede que fique muito grande em telas grandes */
  height: auto;      /* mantém a proporção */
  display: block;    /* permite centralizar */
  margin: 0 auto;    /* centraliza horizontalmente */
  border-radius: 10px; /* opcional: cantos levemente arredondados */
  }
  .bonito:hover {
    background-color: #003d7a; /* cor no hover */
    transform: scale(1.05); /* leve aumento ao passar o mouse */
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
        <a href="#dislexia">Dislexia ▾</a>
        <ul class="dropdown-content">
          <li><a href="#oque-e-dislexia" data-page="dislexia.php">O que é Dislexia</a></li>
          <li><a href= "#tipo-dislexia" data-page="tipos-dislexia.php">Tipos de dislexia</a></li> 
          <li><a href="#identificar" data-page="identificar.php">Como Identificar</a></li>
          <li><a href="#Pessoas" data-page="PessoasC.php">Pessoas com Dislexia</a></li>
          <li><a href="#filmes" data-page="filmes.php">Filmes que abordam a dislexia</a></li> 
          <li><a href="#leis" data-page="Leis.php">Leis e Direitos</a></li> 
        </ul>
      </li>

      <li class="dropdown">
       <a href="#servicos">Serviços ▾</a>
       <ul class="dropdown-content">
        <li><a href="#sobre-nos" data-page="sobre.php">Sobre Nós</a></li>
        <li><a href="#profissionais" data-page="profissionais.php">Profissionais</a></li>
        <li><a href="#Aplicativo" data-page="Aplicativo.php">Aplicativos que auxiliam</a></li>
       </ul>
      <li><a href="#contato" data-page="contato.php">Contato</a></li>
     </li>
    </ul>
  </nav>
</header>

  <main id="conteudo">

<!-- conteudo da pagina -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

    
      <div class="carousel-item active">
        <img src="imagems/PessoasC.png" class="d-block w-100" alt="Entenda a Dislexia">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <a href="#" data-page="PessoasC.php" class="btn btn-success btn-lg">SAIBA MAIS</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagems/aplicativo.png" class="d-block w-100" alt="Aplicativo">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <a href="#" data-page="Aplicativo.php" class="btn btn-success btn-lg">SAIBA MAIS</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="imagems/Filmes.png" class="d-block w-100" alt="Aplicativo">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <a href="#" data-page="filmes.php" class="btn btn-success btn-lg">SAIBA MAIS</a>
        </div>
      </div>

    </div>

    <!-- Controles (setas de navegação) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
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
        <img src="imagems/EntreLinhas.png" alt="img" class="sec-imag">
        <p>Este site foi criado com o intuito de informatizar e desmistificar os preconceitos sobre a dislexia, trazendo o máximo 
          de informações possíveis sobre o tema. Até hoje, muitas pessoas com dislexia ainda sofrem com preconceitos existentes, 
          e o nosso site busca facilitar o acesso a informações de forma clara e acessível. Caso possua alguma dúvida, por favor, 
          entre em contato conosco.</p>
        <a href="#" data-page="contato.php" class="bonito">CONTATO</a>  
  </section>

  <section id="sobre-site">
        <h2>Leis e direitos</h2>
        <img src="imagems/Direitos.png" alt="img" class="sec-imag">
        <p>Há várias leis e direitos que protegem as pessoas com dislexia, ajudando a facilitar seu dia a dia e garantindo o 
          respeito às suas opiniões. Para saber mais, clique no botão 'Saiba mais' abaixo.</p>
        <a href="#" data-page="Leis.php" class="bonito">SAIBA MAIS</a>
  </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <script src="script.js"></script>

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

  <button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });
  </script>
</body>
</html>
