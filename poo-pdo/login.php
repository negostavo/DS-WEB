<?php
session_start();
include("conexao.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['emailAdmin']) && !empty($_POST['senhaAdmin']) && !empty($_POST['cargoAdmin'])) {
        $emailAdmin = $_POST['emailAdmin'];
        $senhaAdmin = $_POST['senhaAdmin'];
        $cargoAdmin = $_POST['cargoAdmin'];

        try {
            $sql = "SELECT * FROM administrador WHERE emailAdmin = :emailAdmin AND senhaAdmin = :senhaAdmin AND cargoAdmin = :cargoAdmin";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':emailAdmin', $emailAdmin);
            $stmt->bindParam(':senhaAdmin', $senhaAdmin);
            $stmt->bindParam(':cargoAdmin', $cargoAdmin);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['emailAdmin'] = $usuario['emailAdmin'];
                $_SESSION['cargoAdmin'] = $usuario['cargoAdmin'];
                echo "entrou";
                // Redireciona para o index.php
                header("Location: index.php");
                exit;
            } else {

                $_SESSION['erro'] = "Login, senhaAdmin ou cargoAdmin inválidos.";
                echo "Dados invalidos";
                header("Location: login.php");
                exit;
            }
        } catch (PDOException $e) {
            echo "Erro no banco de dados: ";
        }
    } else {
        $_SESSION['erro'] = "Preencha todos os campos.";
        echo "erro nos campos";
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg"> 
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Login</title>
   
</head>
<body>
    <div class="formulario-login">
        <div class="container">
            <h1 style="color: dodgerblue;">Login</h1>
            <form action="login.php" method="POST">
                <label class="informa" for="emailAdmin">Login:</label>
                <input type="text" name="emailAdmin" required placeholder="Digite seu email">

                <label class="informa" for="senhaAdmin">Senha:</label>
                <input type="password" name="senhaAdmin" required placeholder="Digite sua senha">

                <div class="cargoAdmin-radio">
                    <label class="informa">Cargo:</label><br>
                    <p style="color: white;">Administrador</p>
                    <input class="radio" type="radio" name="cargoAdmin" value="admin" required> 
                    <p style="color: white;">Colaborador</p>
                    <input class="radio" type="radio" name="cargoAdmin" value="vendedor" required> 
                </div>

                <input class="botao" type="submit" value="Entrar">

                <?php
                    if (isset($_SESSION['erro'])) {
                        echo '<p class="erro">' . htmlspecialchars($_SESSION['erro']) . '</p>';
                        unset($_SESSION['erro']);
                    }
                ?>
            </form>

        </div>
    </div>
</body>
</html>