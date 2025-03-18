<?php
    session_start();
    if(!isset($_SESSION['emailAdmin']) and !isset($_SESSION['senhaAdmin'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guerine Hortifruti - Admin</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/icon.svg">
    <link rel="stylesheet" href="./assets/style/style.css">

</head>
<body>
<div class="tudo">
    <div class="menu">
                <ul>
                    <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
                    <li><a href="cliente/cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
                    <li><a href="produto/produto.php" class="meumenu" title="Produtos">Produtos </a></li>
                    <li><a href="admin.php" class="meumenu meumenu-active" title="Produtos">Administradores </a></li>
                </ul>
                </div>
        <div class="container">
            <hr>
            <div class="formulario">
                <h1 style="color: white;">Login</h1>
                <form action="insertionAdmin.php" method="POST">
                    <label style="color: white;" for="emailAdmin">Login:</label>
                    <input type="text" name="emailAdminC" required placeholder="Digite seu emailAdmin">

                    <label style="color: white;" for="senhaAdmin">Senha:</label>
                    <input type="password" name="senhaAdminC" required placeholder="Digite sua senhaAdmin">

                    <div class="cargoAdmin-radio">
                        <label style="color: white;">Cargo:</label><br>
                        <p style="color: white;">Administrador</p>
                        <input class="radio" type="radio" name="cargoAdminC" value="admin" required>
                        <p style="color: white;">Colaborador</p>
                        <input class="radio" type="radio" name="cargoAdminC" value="vendedor" required>
                    </div>

                    <input type="submit" value="Entrar">

                    <?php
                        if (isset($_SESSION['erro'])) {
                            echo '<p class="erro">' . htmlspecialchars($_SESSION['erro']) . '</p>';
                            unset($_SESSION['erro']);
                        }
                    ?>
                </form>
                <table id ="clientes">
                <tr>
                    <th>Email </th>
                    <th></th>
                    
                </tr>
                <?php
                
                include 'conexao.php';

                echo "<h2 style='color: white;'>Administradores cadastrados:</h2>";
                $dados = $db->query("SELECT * FROM administrador");
                $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
                foreach($todos as $linha){
                    $emailAdmin = $linha ['emailAdmin'];
                    $idAdmin = $linha ['idAdmin'];
                    echo"
                        <tr>
                            
                            <td>$emailAdmin</td>
                            <td><a href= 'deleteAdmin.php?id=$idAdmin'><i class='fa-solid fa-trash-can'></i></a></td>
                        </tr>
                ";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/0c171f108a.js" crossorigin="anonymous"></script>
</html>