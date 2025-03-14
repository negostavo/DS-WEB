<?php
$idProduto = $_GET['id'] ?? null;

include "../conexao.php";


    $stmt = $db->prepare("DELETE FROM produtos WHERE idProduto = :idProduto");
    $stmt->bindParam(':idProduto', $idProduto,);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Deletou " . $stmt->rowCount() . " linha(s)";
    } else {
        echo "Não deletou nenhuma linha";
    }


header("Location: produto.php");
exit;
?>