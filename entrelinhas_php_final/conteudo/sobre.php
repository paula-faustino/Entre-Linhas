
<section id="sobre-nos">
  <h2>Entre Linhas<h2>
<p>O Entre Linhas é essencial para criar laços com pessoas que buscam conhecimento, familiares, educadores ou até mesmo quem convive com a dislexia. Conteúdos claros e bem elaborados têm o poder de inspirar compreensão, empatia e oferecer apoio para quem precisa. Nosso objetivo é informar e conscientizar, tornando a dislexia um tema de prioridade e de fácil acesso para todos.</p>
<p> Faça do Entre Linhas uma bela representação da inclusão, trazendo informações confiáveis, conteúdos educativos e exemplos reais que ajudam a entender melhor o que é a dislexia! Você quer receber materiais que desmistificam este transtorno de aprendizagem? Deseja aprender maneiras de apoiar amigos, filhos ou alunos com dislexia? Ou gostaria de conhecer histórias inspiradoras de pessoas que convivem com a condição? As possibilidades são infinitas, e todas têm como foco ampliar o conhecimento e transformar a forma como enxergamos a dislexia!</p>
</section>

<div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; padding-top: 50px;">
    <div class="identificar-card">
      <h3>Mayara de O. Santana</h3>
       <img src="imagems/may.jpeg" alt="grupo" class="logo-img">
      <p>Desenvolvedora. Atuou de forma ampla no projeto, sendo responsável pela estruturação e design da documentação, além da implementação do site. Desenvolveu as seções "Sobre Nós" e "Início", organizando o conteúdo e garantindo a usabilidade. Também contribuiu na organização geral do projeto e na padronização das informações. Além disso, colaborou na implementação em JavaScript do botão "Ler Tudo", voltado para acessibilidade, a partir da ideia criada por Suzan.</p> 
    </div>
    <div class="identificar-card">
      <h3>Suzan Marry F. Monteiro</h3>
      <img src="imagems/suzan.jpeg" alt="grupo" class="logo-img">
      <p>Responsável pelo design do site, incluindo a implementação do modo escuro e da funcionalidade "ler tudo" junto com Mayara. E responsável pela conexão com o banco de dados do site, voltada para acessibilidade de pessoas com dislexia. Contribuiu com a pesquisa de leis e direitos relacionados ao tema do projeto e desenvolveu, em conjunto com a Emilly, o formulário para a pesquisa de campo. Além disso, atuou no gerenciamento das redes sociais, sendo responsável pelo Twitter do site em parceria com a Emilly.</p>
    </div>
    <div class="identificar-card">
      <h3>Emilly Magela </h3>
      <br><img src="imagems/emilly.jpeg" alt="grupo" class="logo-img">
      <p>Contribuiu para a elaboração do formulário da pesquisa de campo, participando também da definição das abas do site. Foi responsável por registrar na documentação do projeto os resultados obtidos com a pesquisa. Implementou a fonte OpenDyslexic no site, trazendo mais acessibilidade, e atuou na gestão das redes sociais, cuidando do Instagram do projeto. Além disso, pesquisou sobre aplicativos que auxiliam pessoas com dislexia e realizou estudos sobre a história e inspirações relacionadas ao tema.</p>
    </div>
    <div class="identificar-card">
      <h3>Paula G. Faustino </h3>
      <br><img src="imagems/papa.jpeg" alt="grupo" class="logo-img">
      <p>Foi responsável por trazer materiais gratuitos e conceitos sobre dislexia para compor o conteúdo do site. Descobriu uma fonte acessível para auxiliar pessoas com dislexia e colaborou ativamente na documentação do projeto, contribuindo com as imagens, a conclusão, o objetivo e o resumo do produto, além de criar a imagem de capa.</p>
    </div>
</div>


<section>
  <h2>Nosso objetivo</h2>
  <p>O Entre Linhas tem como objetivo informar e conscientizar sobre a dislexia, apresentando suas características, causas e impactos no aprendizado. Buscamos oferecer exemplos práticos, materiais gratuitos e acessíveis, além de histórias inspiradoras, que promovem empatia e compreensão. Também mapeamos recursos e informações úteis, incluindo profissionais especializados, leis e direitos, para apoiar famílias, educadores, alunos e toda a comunidade no processo de inclusão e no entendimento da dislexia.</p>
</section>
 
<section class="social-links">
  <h2>Redes Sociais</h2>
  <a href="https://www.instagram.com/entrelinhassite?igsh=eHNzMWFlb2RzY2J3"target="_blank"> <img src="imagems/Instagram.webp" alt="grupo" class="redes_logo"> Instagram </a>
  <a href="https://x.com/EntreLinhasSEPM?t=UDAtIas57ACqTR-e34mArQ&s=08"target="_blank"><img src="imagems/X_logo.jpg" alt="grupo" class="redes_logo"> Twitter (X) </a>
</section>


<script src="script.js"></script>

 <button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });
 