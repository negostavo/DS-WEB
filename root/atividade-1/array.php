<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body></body>

<?php
// Array de frutas
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Abacaxi"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "<br>" . "<br>" . "<br>" . "<br>";

//  Atualizando o array
echo '<h1>Array atualizado</h1>';
array_push($frutas, "Melancia");
foreach ($frutas as $fruta) {
    echo $frutas . "<br>";
}

echo "<br>" . "<br>" . "<br>" . "<br>";

// Ordenando alfabeticamente 
echo '<h1>Array alfabético</h1>';
sort($frutas);
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "<br>" . "<br>" . "<br>" . "<br>";

// Array associativo 
echo '<h1>Informações do produto</h1>';
$produto = [
    "nome" => "Maçã",
    "preco" => 4.75,
    "estoque" => 20
];

foreach ($produto as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}

echo "<br>" . "<br>";

// Calculando a venda 
echo '<h1>Venda </h1>';
$quantidade_venda = 5;
$valor_total = $produto["preco"] * $quantidade_venda;

echo "Produto: " . $produto["nome"] . "<br>";
echo "Quantidade vendida: " . $quantidade_venda . "<br>";
echo "Valor total: R$ " . $valor_total  . "<br>";

//array associativo
echo '<h1>Combinação de array </h1>';

$produtos = ["Teclado", "Mouse", "Monitor"];
$precos = [150.00, 80.00, 1200.00];

$combinado = array_combine($produtos, $precos);


echo '<h1>Array Associativo de Produtos</h1>';
foreach ($combinado as $produto => $preco) {
    echo "Produto: " . $produto . " - Preço: R$ " . $preco . "<br>";
}

echo '<h1>verificação de cor</h1>';

$cor = ["vermelho", "azul", "verde", "amarelo", "preto"];

if (in_array("verde", $cor)) {
    echo "Verde existe";
}

// Calculando a soma 
echo '<h1>Soma de valores</h1>';
$numeros = [10, 20, 30, 40, 50];

$soma = array_sum($numeros);

echo "A soma de todos os números é: " . $soma . "<br>";
?>