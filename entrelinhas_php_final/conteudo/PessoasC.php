<button class="dark-toggle" onclick="toggleDarkMode()">🌙 Modo Escuro</button>

  <script>
    const toggle = document.querySelector('.dark-toggle');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('modo-escuro');
    });
