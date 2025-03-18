<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script>
    window.location.href = 'cliente.php';
    </script>";
}
    include'clienteValida.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];

    if (validaCliente($nome, $email, $observacao)){

    
    include "../conexao.php";

    echo "<h2>Inserindo dados</h2>";
    $statement = $db->prepare("INSERT INTO clientes (nome, email, observacao) VALUES (:nome, :email, :observacao)");

    $statement -> bindParam('nome', $nome, );
    $statement -> bindParam('email', $email, );
    $statement -> bindParam('observacao', $observacao, );

    $statement->execute();
}

header ("Location: cliente.php");
?>