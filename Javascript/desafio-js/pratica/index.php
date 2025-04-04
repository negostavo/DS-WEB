<?php require_once 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h2>Cadastrar Novo Cliente</h2>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Clientes Cadastrados</h2>

    <?php

    if {
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
    }
    ?>
</body>
</html>