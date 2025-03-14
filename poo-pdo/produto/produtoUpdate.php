<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script>
    alert('está faltando o método post')
    window.location.href = 'produto.php';
    </script>";
}

$idProduto = $_GET['id'];
$nomeProduto = $_POST['nomeProduto'];
$codigoProduto = $_POST['codigoProduto'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];


include "../conexao.php";

$statement = $db->prepare("UPDATE produtos SET nomeProduto = :nomeProduto, codigoProduto = :codigoProduto, preco = :preco, estoque = :estoque WHERE idProduto = :idProduto" );

$statement -> bindParam(':nomeProduto', $nomeProduto, );
$statement -> bindParam(':codigoProduto', $codigoProduto, );
$statement -> bindParam(':preco', $preco, );
$statement -> bindParam(':estoque', $estoque, );
$statement -> bindParam(':idProduto', $idProduto);

$statement->execute();

header ("Location: produto.php");

?>