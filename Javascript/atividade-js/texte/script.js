const campoTexto = document.getElementById('campoTexto');
const textoDigitado = document.getElementById('textoDigitado');

campoTexto.addEventListener('input', function() {
  textoDigitado.textContent = campoTexto.value;
});

//segunda atividade
const botao = document.getElementById('meuBotao');
const contador = document.getElementById('contador');
let numeroCliques = 0;

botao.addEventListener('click', function() {
  numeroCliques++;
  contador.textContent = numeroCliques;
});

//terceira lição

var div = document.createElement("DIV");
div.innerHTML = "<h1>Hello World!</h1>";

div.style.backgroundColor = "#C3B091";
div.style.border = "1px solid #ccc";
div.style.padding = "20px";
div.style.textAlign = "center";
div.style.marginTop = "20px";


div.addEventListener("mouseover", function() {
  div.innerHTML = "<h1>Não usei GPT(foi deepseek)</h1>";
});


div.addEventListener("mouseout", function() {
  div.innerHTML = "<h1>Hello World!</h1>";
});


document.body.appendChild(div);