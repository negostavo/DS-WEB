<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/icon.svg">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <div class="tudo">
        <div class="menu">
            <ul>
                <li><a href="../index.php" class="meumenu" title="Home">Home</a></li>
                <li><a href="../cliente/cliente.php" class="meumenu" title="produtos">Clientes </a></li>
                <li><a href="../produto/produto.php" class="meumenu meumenu-active" title="Produtos">Produtos </a></li>
            </ul>
        </div>
        <div class="container">
            <hr>
            <?php
                if($_SERVER['REQUEST_METHOD'] != 'GET' OR !isset($_GET['id'])){
                header("location:produto.php");
                }

                include '../conexao.php';

                echo "<h2>Exemplo de consulta com muitas linhas</h2>";
                $idProduto = $_GET['id'];
                $stmt = $db ->prepare("SELECT * FROM produtos WHERE idProduto = :idProduto");
                $stmt->bindParam(':idProduto',$idProduto);
                $stmt->execute();
                $dados = $stmt -> fetch(PDO::FETCH_ASSOC); //todos os registros retornados
                
                
                    $codigoProduto = $dados ['codigoProduto'];
                    $nomeProduto = $dados ['nomeProduto'];
                    $estoque = $dados ['estoque'];
                    $preco =$dados['preco'];
                    $idProduto = $_GET['id'];
                
            ?>
            <div class="formulario">
                <form action="produtoUpdate.php?id=<?=$idProduto;?>" method="POST" name="formulario" onsubmit="return validarDadosProdutos()">
                    
                    
                    <label for="codigo">codigo: </label><br>
                    <input type="text" name="codigoProduto" value="<?= $codigoProduto;?>">
                    <p class="erro-input" id="cod"></p>

                    <label for="codigo">nome: </label><br>
                    <input type="text" name="nomeProduto" value="<?= $nomeProduto;?>">
                    <p class="erro-input" id="nome"></p>

                    <label for="estoque">estoque: </label><br>
                    <input type="text" name="estoque" id="estoque" value="<?= $estoque;?>">
                    
                    <p class="erro-input" id="erro-estoque"></p>

                    <label for="preco">preco: </label><br>
                    <input type="text" name="preco" id="preco" value="<?= $preco;?>">
                    <p class="erro-input" id="erro-preco"></p>
                    
                    
                    <br><br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/384370e6c4.js" crossorigin="anonymous"></script>
</html>