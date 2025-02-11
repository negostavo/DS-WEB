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

function maioridade() {
    var idadeInput = document.getElementById('idade');
    var idade = parseInt(idadeInput.value);
  
    console.log(typeof idade);
  
    if (idade >= 18) {
      document.getElementById("resultIdade").innerHTML = "Você é maior de idade.";
    } else {
      document.getElementById("resultIdade").innerHTML = "Você é menor de idade.";
    }
  }

//segunda lição

function check() {
    var n1Input = document.getElementById('n1');
    var n1 = parseInt(n1Input.value);
  
    console.log(typeof n1);
  
    if (n1 == 0) {
      document.getElementById("resultn1").innerHTML = "o numero é 0";
    } else if (n1>0) {
      document.getElementById("resultn1").innerHTML = "o numero é positivo";
    } else {
        document.getElementById("resultn1").innerHTML = "o numero é negativo";

    }
  }
  
//terceira lição
function loginadm() {
    usuario = admin;
    senhacerta = 1234;

    var user = document.getElementById("user").value;
    var user1 = user
  
    var senhaInput = document.getElementById('senha');
    var senha = parseInt(senhaInput.value);
  
    console.log(typeof senha);
  
    if (usuario == user1 && senhacerta == senha) {
      document.getElementById("loginadm").innerHTML = "boas vindas";
    }else {
        document.getElementById("loginadm").innerHTML = "usuario ou senha errada";

    }
  }


