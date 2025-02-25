function calcular() {
    
    const divNome = document.getElementById('nome').value;
    const divDesc = document.getElementById('descricao').value;

    const novaDiv = document.createElement("div");
    novaDiv.setAttribute("class", "item");

    var paragrafo = document.createElement("p");
    document.querySelector("p#paragrafo").style.backgroundColor = "blue";

    paragrafo.textContent = divNome + " - " + divDesc;

    var deletar = document.createElement("button");
    deletar.textContent = "bruno lindo";
    deletar.onclick = function() {

        novaDiv.remove();
    };

    novaDiv.appendChild(paragrafo);
    novaDiv.appendChild(deletar);

    var areaCartao = document.getElementById("cartao");
    areaCartao.appendChild(novaDiv);
}