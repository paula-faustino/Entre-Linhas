document.addEventListener("DOMContentLoaded", () => {
  const conteudo = document.getElementById("conteudo");

  // ===============================
  // Controle de leitura
  // ===============================
  let lendo = false;
  let utterance;
  let bloquearLeitura = false; // impede leitura ao clicar em textos

  // Navegação Ajax
  document.querySelectorAll("a[data-page]").forEach(link => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const pagina = "conteudo/" + link.getAttribute("data-page");
    fetch(pagina)
      .then(res => res.text())
      .then(html => {
        conteudo.innerHTML = html;
        window.scrollTo({ top: 0, behavior: "smooth" });
        document.title = "EntreLinhas";
      });
  });
});


  // Delegação: leitura em voz alta (somente se não estiver bloqueado)
  document.addEventListener("click", (e) => {
    if (bloquearLeitura) return; // não deixa ler se bloqueado

    const el = e.target.closest("h1, h2, h3, p, button");
    if (!el) return;
    const text = el.textContent?.trim();
    if (text) {
      const speech = new SpeechSynthesisUtterance(text);
      speech.lang = "pt-BR";
      window.speechSynthesis.cancel();
      window.speechSynthesis.speak(speech);
    }
  });

  // ===============================
  // Botão Ler Tudo
  // ===============================
  const btnLerTudo = document.getElementById('btn-ler-tudo');
  if (btnLerTudo) {
    btnLerTudo.addEventListener('click', () => {
      if (lendo) {
        // 🔴 Parar leitura de vez
        window.speechSynthesis.cancel();
        lendo = false;
        bloquearLeitura = true; // bloqueia cliques
        btnLerTudo.textContent = "Ler Tudo";
      } else {
        // Decide qual parte ler: seção ativa, ou main, ou body
        const alvo = document.querySelector("section.ativa") 
                  || document.querySelector("main") 
                  || document.body;

        const texto = alvo.innerText.trim();
        if (texto) {
          utterance = new SpeechSynthesisUtterance(texto);
          utterance.lang = 'pt-BR';
          utterance.onend = () => {
            lendo = false;
            bloquearLeitura = true; // bloqueia cliques quando termina
            btnLerTudo.textContent = "Ler Tudo";
          };
          window.speechSynthesis.cancel();
          window.speechSynthesis.speak(utterance);
          lendo = true;
          bloquearLeitura = false; // enquanto lê, cliques ainda funcionam
          btnLerTudo.textContent = "Parar Leitura";
        }
      }
    });
  }
});

// Função para alternar o modo
function toggleDarkMode() {
  document.body.classList.toggle("modo-escuro");

  if (document.body.classList.contains("modo-escuro")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
}

window.onload = function () {
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    document.body.classList.add("modo-escuro");
  }
};

