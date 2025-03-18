<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> window.location.href = 'admin.php';</script>";
    exit();
}

$emailAdminC = $_POST['emailAdminC'];
$senhaAdminC = $_POST['senhaAdminC'];
$cargoAdminC = $_POST['cargoAdminC'];

include 'conexao.php';

echo "<h2>Inserindo dados...</h2>";

try {
    $statement = $db->prepare("INSERT INTO administrador (emailAdmin, senhaAdmin, cargoAdmin) VALUES (:emailAdmin, :senhaAdmin, :cargoAdmin)");
    
    $statement->bindParam(':emailAdmin', $emailAdminC);
    $statement->bindParam(':senhaAdmin', $senhaAdminC);
    $statement->bindParam(':cargoAdmin', $cargoAdminC);
    
    if ($statement->execute()) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Erro ao inserir no banco.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
