<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

}if {
        $inser = $db->prepare("INSERT INTO clientes (nome, email) VALUES (:nome, :email)");
        $inser->execute(array(':nome' => $nome, ':email' => $email));

        echo "<p>Dados inseridos com sucesso!</p>";
    }
?>
