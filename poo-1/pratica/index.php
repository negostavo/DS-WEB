<?php

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    try {
        $statement = $db->prepare("INSERT INTO clientes (nome, email) VALUES (:nome, :email)");
        $statement->execute(array(':nome' => $nome, ':email' => $email));

        echo "<p>Dados inseridos com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p>Erro ao inserir dados: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="POST" action="" id="formulario">
    <h2>Cadastrar Novo Cliente</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <h2>Clientes Cadastrados</h2>
            <?php
            try {
                $dados = $db->query("SELECT * FROM clientes");
                $todos = $dados->fetchAll(PDO::FETCH_ASSOC); 

                if (count($todos) > 0) {
                    foreach ($todos as $linha) {
                        echo "ID: " . $linha['id'] . "<br>";
                        echo "Nome: " . $linha['nome'] . "<br>";
                        echo "E-mail: " . $linha['email'] . "<br><br>";
                    }
                } else {
                    echo "<p>Nenhum cliente cadastrado.</p>";
                }
            } catch (PDOException $e) {
                echo "<p>Erro ao buscar dados: " . $e->getMessage() . "</p>";
            }
            ?>
    </form>

    
</body>
</html>