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
<div class="tudo">
        <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos">Produtos </a></li>
            <li><a href="venda.php" class="meumenu" title="Produtos">Vendas</a></li>
        </ul>
        </div>
        <div class="container">
            <hr>
            <div>
                <h1 style="color: rgb(88, 0, 212);">Informações essenciais :</h1>

                <!-- exibição php -->
            </div>
                <div class="cadastrados">
                    <?php 
                        include 'conexao.php';
                        
                        $dados = $db->query("SELECT * FROM clientes");
                        echo "<h4>Quantidade de clientes cadastrados : </h4>"."<h3>".$dados->rowCount()."</h3>";
                    ?>
                </div>
                
                <div class="cadastrados">
                    <?php
                        include 'conexao.php';

                        $dados = $db->query("SELECT * FROM produtos");
                        echo "<h4>Quantidade de produtos cadastrados : </h4>"."<h3>".$dados->rowCount()."</h3>";
                    ?>

                </div>
                <?php
                     echo '<a class"botao" href="logout.php"><input style="background-color: rgb(88, 0, 212); color:white;" type="button" value="Logout" class"botao"></a>';
                ?>
            
        </div>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>