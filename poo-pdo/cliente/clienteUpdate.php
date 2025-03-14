<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script>
    alert('está faltando o método post')
    window.location.href = 'cliente.php';
    </script>";
}

$id = $_GET['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$observacao = $_POST['observacao'];


include "../conexao.php";

include "../conexao.php";

$statement = $db->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao = :observacao WHERE id = :id");

$statement->bindParam(':nome', $nome, PDO::PARAM_STR);
$statement->bindParam(':email', $email, PDO::PARAM_STR);
$statement->bindParam(':observacao', $observacao, PDO::PARAM_STR);
$statement->bindParam(':id', $id, PDO::PARAM_INT);

if ($statement->execute()) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o registro.";
}



header ("Location: cliente.php");

?>