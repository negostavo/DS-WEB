function calcular() {
    const divNome = document.getElementById('nome').value;
    const divDesc = document.getElementById('descricao').value;

    const novaDiv = document.createElement("div");

    novaDiv.style.backgroundColor = "#d4c0a8";
    novaDiv.style.borderRadius = "10px";
    novaDiv.style.padding = "15px";
    novaDiv.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
    novaDiv.style.display = "flex";
    novaDiv.style.alignItems = "center";
    novaDiv.style.marginBottom = "15px";

    const paragrafo = document.createElement("p");
    paragrafo.textContent = divNome + " - " + divDesc;

    paragrafo.style.margin = "0";
    paragrafo.style.fontSize = "16px";
    paragrafo.style.color = "#5a4a42";

    const deletar = document.createElement("button");
    deletar.textContent = "Deletar";

    deletar.style.backgroundColor = "#a8b8a8";
    deletar.style.border = "none";
    deletar.style.borderRadius = "5px";
    deletar.style.color = "#faf6f0";
    deletar.style.padding = "8px 12px";
    deletar.style.fontSize = "14px";
    deletar.style.cursor = "pointer";
    deletar.style.transition = "background-color 0.3s ease";

    deletar.onmouseover = function() {
        deletar.style.backgroundColor = "#8a9b8a";
    };
    deletar.onmouseout = function() {
        deletar.style.backgroundColor = "#a8b8a8";
    };

    deletar.onclick = function() {
        novaDiv.remove();
    };

    novaDiv.appendChild(paragrafo);
    novaDiv.appendChild(deletar);

    const areaCartao = document.getElementById("cartao");
    areaCartao.appendChild(novaDiv);
}

document.body.style.backgroundColor = "#f0e6d2";
document.body.style.color = "#5a4a42";
document.body.style.margin = "0";
document.body.style.padding = "20px";
document.body.style.display = "flex";
document.body.style.flexDirection = "column";
document.body.style.alignItems = "center";
document.body.style.justifyContent = "center";

const inputs = document.querySelectorAll("input[type='text']");
inputs.forEach(input => {
    input.style.width = "300px";
    input.style.padding = "10px";
    input.style.marginBottom = "15px";
    input.style.border = "2px solidrgb(197, 228, 197)";
    input.style.borderRadius = "5px";
    input.style.fontSize = "16px";
    input.style.backgroundColor = "#faf6f0";
    input.style.color = "#5a4a42";
});

const botaoPrincipal = document.querySelector("button");
botaoPrincipal.style.backgroundColor = "#a8b8a8";
botaoPrincipal.style.borderRadius = "5px";
botaoPrincipal.style.color = "#faf6f0";
botaoPrincipal.style.padding = "10px 20px";
botaoPrincipal.style.fontSize = "16px";
botaoPrincipal.style.cursor = "pointer";

botaoPrincipal.onmouseover = function() {
    botaoPrincipal.style.backgroundColor = "#8a9b8a";
};
botaoPrincipal.onmouseout = function() {
    botaoPrincipal.style.backgroundColor = "#a8b8a8";
};