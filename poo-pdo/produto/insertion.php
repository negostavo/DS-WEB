<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script>
    alert('está faltando o método post')
    window.location.href = 'produto.php';
    </script>";
}

$codigoProduto =$_POST['codigoProduto'];
$nomeProduto = $_POST['nomeProduto'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

include '../conexao.php';

echo "<h2>Inserindo dados: </h2>";
$statement = $db->prepare("INSERT INTO produtos (codigoProduto, nomeProduto, estoque, preco ) VALUES (:codigoProduto, :nomeProduto, :estoque, :preco )");

$statement -> bindParam('codigoProduto', $codigoProduto, );
$statement -> bindParam('nomeProduto', $nomeProduto, );
$statement -> bindParam('estoque', $estoque, );
$statement -> bindParam('preco', $preco, );

$statement->execute();

header ("Location: produto.php");
?>