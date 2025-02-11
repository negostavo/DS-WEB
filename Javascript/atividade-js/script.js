function botaoClique(){
    var nome = document.getElementById("nome").value;

    var nome1 = nome;
    document.getElementById("resultadoNome").innerHTML = "bem vindo: " + nome1;   
}
//segunda lição
function calcular () {
    var numero1 = document.getElementById("numero1").value;

    console.log(typeof numero1);

    numero1 = parseInt(numero1);



    if (numero1 % 2 == 0) {
        document.getElementById("result").innerHTML = "O número " + numero1 + " é par.";
    } else {
        document.getElementById("result").innerHTML = "O número " + numero1 + " é ímpar.";
    }
}
//terceira lição
function caixaAlta(){
    var alta1 = document.getElementById("alta").value;

     alta1 =alta1.toUpperCase();
    document.getElementById("maiuscula").innerHTML = alta1  
}
//quarta lição
function porc(){
    var montante1 = document.getElementById("montante").value;


    var resultadoPorc = montante1 * (montante1/100);

    document.getElementById("resultadoPorcentagem").innerHTML = "o montante final é: "+ resultadoPorc;


}
//quinta lição
function mudarCor(){

    var a = window.document.getElementById('area');

        a.innerText = 'Clicou!';
        a.style.background = 'red';

}

//lista com if e else

