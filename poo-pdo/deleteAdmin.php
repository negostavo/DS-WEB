<?php
$idProduto = $_GET['id'] ?? null;

if (!$idProduto) {
    echo "ID inválido!";
    exit();
}

include "conexao.php";

try {
    $stmt = $db->prepare("DELETE FROM administrador WHERE idAdmin = :idAdmin");
    $stmt->bindParam(':idAdmin', $idProduto);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Deletou " . $stmt->rowCount() . " linha(s)";
    } else {
        echo "Nenhuma linha foi deletada. Verifique se o ID existe.";
    }

    header("Location: admin.php");
    exit();
} catch (PDOException $e) {
    echo "Erro ao deletar: " . $e->getMessage();
}
?>