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
function mudarCor() {
  const elemento = document.getElementById('area');
  const corAtual = elemento.style.backgroundColor;

  if (corAtual === 'green') {
    elemento.style.backgroundColor = 'red';
  } else {
    elemento.style.backgroundColor = 'green';
  }
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
    const usuarioCorreto = "admin";
    const senhaCorreta = "1234";
  
    const user = document.getElementById("user").value;
    const senhaInput = document.getElementById('senha');
    const senha = senhaInput.value;
  
    if (usuarioCorreto === user && senhaCorreta === senha) {
      document.getElementById("loginadm").textContent = "Boas vindas!";
    } else {
      document.getElementById("loginadm").textContent = "Usuário ou senha incorretos.";
    }
  }
  
//quarta lição
function operações(){
    const sinal = document.getElementById("operadores").value;

    var primeiroInput = document.getElementById('primeiro');
    var primeiro = parseInt(primeiroInput.value);
    primeiro = parseInt(primeiro);


    var segundoInput = document.getElementById('segundo');
    var segundo = parseInt(segundoInput.value);
    segundo = parseInt(segundo);


    if (sinal === "+") {
        var resultado = (primeiro+segundo);
        document.getElementById("resultadoOp").innerHTML = "seu resultado é: " + resultado;

    } else if (sinal === "-"){
        var resultado = (primeiro-segundo);
        document.getElementById("resultadoOp").innerHTML = "seu resultado é: " + resultado;


    }else if (sinal === "*"){
        var resultado = (primeiro*segundo);
        document.getElementById("resultadoOp").innerHTML = "seu resultado é: " + resultado;


    }else if (sinal === "/"){
        var resultado = (primeiro/segundo);
        document.getElementById("resultadoOp").innerHTML = "seu resultado é: " + resultado;


    }



}

//quinta lição
function calc () {
    var teste1 = document.getElementById("teste").value;

    console.log(typeof teste1);

    teste1 = parseInt(teste1);



    if (teste1 % 2 == 0) {
        document.getElementById("resulteste").innerHTML = "O número " + teste1 + " é par.";
    } else {
        document.getElementById("resulteste").innerHTML = "O número " + teste1 + " é ímpar.";
    }
}

//sexta lição
function encontrarMaior() {
   
    const num1 = parseFloat(document.getElementById("num1").value);
    const num2 = parseFloat(document.getElementById("num2").value);
    const num3 = parseFloat(document.getElementById("num3").value);

    let maior;
    if (num1 >= num2 && num1 >= num3) {
      maior = num1;
    } else if (num2 >= num1 && num2 >= num3) {
      maior = num2;
    } else {
      maior = num3;
    }
  

    document.getElementById("resulteste").textContent = "O maior número é: " + maior;
  }
  function tipo() {
   
    const lado1 = parseFloat(document.getElementById("lado1").value);
    const lado2 = parseFloat(document.getElementById("lado2").value);
    const lado3 = parseFloat(document.getElementById("lado3").value);


    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0 ||
        lado1 + lado2 <= lado3 || lado1 + lado3 <= lado2 || lado2 + lado3 <= lado1) {
        document.getElementById("triangulo").innerHTML = "Valores inválidos ou não formam um triângulo.";
        return;
  }
  
      if (lado1 === lado2 && lado1 === lado3) {
        document.getElementById("triangulo").innerHTML = "O triangulo é equilatero "; 

      } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
        document.getElementById("triangulo").innerHTML = "O trianguo é isoceles ";

      } else {
        document.getElementById("triangulo").innerHTML = "O triangulo é escaleno " ; 
      }
    }

