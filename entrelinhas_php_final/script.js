document.addEventListener("DOMContentLoaded", () => {
  const conteudo = document.getElementById("conteudo");

  // Navegação Ajax
  document.querySelectorAll("nav a[data-page]").forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const pagina = "conteudo/" + link.getAttribute("data-page");
      fetch(pagina)
        .then(res => res.text())
        .then(html => {
          conteudo.innerHTML = html;
          window.scrollTo({ top: 0, behavior: "smooth" });
        })
        .catch(err => console.error("Erro ao carregar:", err));
    });
  });

  // Delegação: leitura em voz alta para elementos de texto e botões (inclusive conteúdos dinâmicos)
  document.addEventListener("click", (e) => {
    const el = e.target.closest("h1, h2, h3, p, button");
    if (!el) return;
    const text = el.textContent?.trim();
    if (text) {
      const speech = new SpeechSynthesisUtterance(text);
      speech.lang = "pt-BR";
      window.speechSynthesis.speak(speech);
    }
  });

  // Botão Ler Tudo (fixo)
  const btnLerTudo = document.getElementById('btn-ler-tudo');
  if (btnLerTudo) {
    btnLerTudo.addEventListener('click', () => {
      const texto = document.body.innerText;
      const speech = new SpeechSynthesisUtterance(texto);
      speech.lang = 'pt-BR';
      window.speechSynthesis.speak(speech);
    });
  }
});
// Função para alternar o modo
function toggleDarkMode() {
  document.body.classList.toggle("dark-mode");

  // Salva no localStorage
  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
}

// Quando a página carregar, aplica o tema salvo
window.onload = function () {
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    document.body.classList.add("dark-mode");
  }
};

