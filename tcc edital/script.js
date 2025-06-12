
function openModal(id) {
 
}

function closeModal(id) {
}


function readText(text) {
    let speech = new SpeechSynthesisUtterance(text);
    speech.lang = "pt-BR";
    window.speechSynthesis.speak(speech);
}


document.querySelectorAll("h1, h2, h3, p").forEach(element => {
    element.addEventListener("click", () => readText(element.textContent));
});

  const btnLerTudo = document.getElementById('btn-ler-tudo');
    btnLerTudo.addEventListener('click', () => {
      const texto = document.body.innerText;
      const speech = new SpeechSynthesisUtterance(texto);
      speech.lang = 'pt-BR';
      window.speechSynthesis.speak(speech);
    });