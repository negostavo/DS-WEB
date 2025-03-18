<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <?php
    include 'conexao.php';

    $erroNome = $erroEmail = $erroCargo = $erroSenha = '';
    $nomeAdmin = $emailAdmin = $cargoAdmin = $senhaAdmin = '';

    
    ?>

    <div class="container">
        <div class="formulario-login">
        <h2>Login</h2>
            <form method="POST" name="formulario" action="session.php" onsubmit="return validalogin()">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?=isset($_SESSION['erroCodigo']) ? $_SESSION['erroCodigo'] : ""?>" placeholder="Digite o nome">
                <p class="erro-input" id="erro-nome"><?php echo $erroNome; ?></p>

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" value="<?=isset($_SESSION['erroCodigo']) ? $_SESSION['erroCodigo'] : ""?>" placeholder="Digite o Email">
                <p class="erro-input" id="erro-email"><?php echo $erroEmail; ?></p>

                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="Digite a senha">
                <p class="erro-input" id="erro-senha"><?php echo $erroSenha; ?></p>

        

                <input type="submit">
            </form>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>
<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        include_once('connection.php');
        $emailAdmin = $_POST['emailAdmin'];
        $senhaAdmin = $_POST['senhaAdmin'];

        $sql = "SELECT * FROM administrador WHERE emailAdmin = '$emailAdmin' and senhaAdmin = '$senhaAdmin'";
        $resultado = mysqli_query($conexao, $sql);    
        // Verifica se há registros
        if (mysqli_num_rows($resultado) > 0) {
            //Converte em Array Associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados na sessão
            $_SESSION['emailAdmin'] = $linha['emailAdmin'];
            $_SESSION['senhaAdmin'] = $linha['senhaAdmin'];
        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
        }

    }