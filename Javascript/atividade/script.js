// atividade 1
alert("Ola Mundo ");

//atividade 2
var nome = prompt ("digite seu nome");
var sobrenome = prompt ("digite seu sobrenome");

var result = (nome+ " " + sobrenome);
alert(result);

//atividade 3
var ad1 = Number.parseInt (prompt ("coloque o primeiro numero para adição: "));
var ad2 = Number.parseInt (prompt ("coloque o segundo numero para adição: "));

var resultado2 = (ad1+ad2);
alert(resultado2);

//subtração
var sub1 = Number.parseInt (prompt ("coloque o primeiro numero para subtração: "));
var sub2 = Number.parseInt (prompt ("coloque o segundo numero para subtração: "));

var resultado3 = (sub1-sub2);
alert(resultado3);

//multiplicação
var mult1 = Number.parseInt (prompt ("coloque o primeiro numero para multiplicar: "));
var mult2 = Number.parseInt (prompt ("coloque o segundo numero para multiplicar: "));

var resultado4 = (mult1*mult2);
alert(resultado4);

//divisão
var div1 = Number.parseInt (prompt ("coloquue o divisor: "));
var div2 = Number.parseInt (prompt ("coloque o dividendo: "));

var resultado5 = (div1/div2);
alert(resultado5);

//atividade 4
var cub1 = Number.parseInt (prompt ("coloquue o numero a ser elevado ao cubo : "));

var resultado6 = (cub1**3);
alert(resultado6);

//atividade 5
alert("conversão de fahrenheit para celcius"); 

var f1 = Number.parseInt (prompt ("coloque a temperatura em fahrenheit : "));

var resultado7 = ( 5/9*(f1-32))
alert(resultado7);

//atividade 6
alert("previsão do montante de juros compostos:"); 
var c = Number.parseInt(prompt("digite o capital inicial (nao a banda) : "));

var i = Number.parseInt(prompt("digite o juros em porcentagem : ")) / 100;

var t = Number.parseInt(prompt("digite o tempo em meses : "));

var m = c * (1 + i) ** t;

console.log("O montante final é: " + m.toFixed(2));



