<?php
// Criando array 
$produtos = [
    ["nome" => "Teclado", "preco" => 150.00, "estoque" => 20],
    ["nome" => "Mouse", "preco" => 80.00, "estoque" => 35],
    ["nome" => "Monitor", "preco" => 1200.00, "estoque" => 10],
    ["nome" => "Headset", "preco" => 200.00, "estoque" => 15],
    ["nome" => "Cadeira", "preco" => 850.00, "estoque" => 5]
];


$valor_total = 0;

echo '<h1>Informações dos Produtos</h1>';


foreach ($produtos as $produto) {
    $valor = $produto["preco"] * $produto["estoque"];
    $valor_total += $valor;

    
    echo "Produto: " . $produto["nome"] . "<br>";
    echo "Preço: R$ " . $produto["preco"] . "<br>";
    echo "Valor do estoque: R$ " . $valor . "<br><br>";
}


echo '<h2>Valor Total em Estoque</h2>';
echo "O valor total em estoque de todos os produtos é: R$ " . $valor_total;



// calculo de notas
echo '<h1>Média de notas </h1>';

$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);


foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "Nota em Matemática: " . $aluno['matematica'] . "<br>";
    echo "Nota em Português: " . $aluno['portugues'] . "<br>";
    

    $media = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo "Média: " . $media . "<br><br>";  
}
?>

