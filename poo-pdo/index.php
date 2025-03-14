<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guerine Hortifruti</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/icon.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <div class="tudo">
        <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="Home">Home</a></li>
            <li><a href="cliente/cliente.php" class="meumenu  " title="Clientes">Clientes </a></li>
            <li><a href="produto/produto.php" class="meumenu" title="Produtos">Produtos </a></li>
        </ul>
        
        </div>
        <div class="container">
            <hr>
            <div class="formulario">
                <h1>Informações essenciais :</h1>

                <!-- parte de exibição php-->
                <div class="cadastrados">
                    <?php 
                        include 'conexao.php';
                        
                        $dados = $db->query("SELECT * FROM clientes");
                        echo "<h2>Quantidade de clientes cadastrados : </h2>"."<h3>".$dados ->rowCount()."</h3>";

                    ?>
                </div>
                <div class="cadastrados">
                    <?php
                        include 'conexao.php';

                        $dados = $db->query("SELECT * FROM produtos");
                        echo "<h2>Quantidade de produtos cadastrados : </h2>"."<h3>".$dados ->rowCount()."</h3>";
                    ?>
                </div>
            </div>
        </div>
    </div>
  
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/0c171f108a.js" crossorigin="anonymous"></script>
</html>