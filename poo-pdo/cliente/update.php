<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/">
</head>
<body>
    <?php
        $dados = $db->query("SELECT * FROM clientes");
    ?>
    <div class="container">
        <div class="formulario">
            <form action="" method="POST">
                <label for="">Nome: </label>
                <input type="text" name="nome">
                <label for="">E-mail: </label>
                <input type="text" name="email">
                <input type="submit">    
            </form>
        </div>

        <?php
        $novoNome = "Bruno Attina";
        $email = "bruno@gmail.com";
        $stmt = $db->prepare('UPDATE clientes SET nome = :nome WHERE email
        = :email');
        $stmt->execute(array(
        ':nome' => $novoNome,
        ':email' => $email
        ));
        if( $stmt->rowCount() > 0 ) {
        echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
        } else {
        echo 'Nada foi alterado.';
        }
        ?>

</div>
</body>
</html>