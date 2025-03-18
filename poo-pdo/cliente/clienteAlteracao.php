<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussines System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/icon.svg">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <div class="tudo">
        <div class="menu">
            <ul>
                <li><a href="../index.php" class="meumenu" title="Home">Home</a></li>
                <li><a href="../cliente/cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes </a></li>
                <li><a href="../produto/produto.php" class="meumenu" title="Produtos">Produtos </a></li>
        
            </ul>
        </div>
        <div class="container">
            <hr>
            <?php
                if($_SERVER['REQUEST_METHOD'] != 'GET' OR !isset($_GET['id'])){
                header("location:cliente.php");
                }

                include '../conexao.php';

                echo "<h2>Exemplo de consulta com muitas linhas</h2>";
                $id = $_GET['id'];
                $stmt = $db ->prepare("SELECT * FROM clientes WHERE id = :id");
                $stmt->bindParam(':id',$id);
                $stmt->execute();
                $dados = $stmt -> fetch(PDO::FETCH_ASSOC); //todos os registros retornados
                
                    $idCliente = $dados ['id'];
                    $nomeCliente = $dados ['nome'];
                    $emailCliente = $dados ['email'];
                    $observacaoCliente = $dados ['observacao'];
                    $id = $_GET['id'];
                
            ?>
            <div class="formulario">
                <form action="clienteUpdate.php?id=<?=$idCliente;?>" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
                    <label for="name">Nome: </label><br>
                    <input type="text" name="nome" value="<?= $nomeCliente;?>">
                    <p class="erro-input" id="erro-nome"></p>
                    
                    <label for="email">E-mail: </label><br>
                    <input type="text" name="email" value="<?= $emailCliente;?>">
                    <p class="erro-input" id="erro-email"></p>
                    
                    <label for="observacao">Observação Cliente: </label>
                    
                    <textarea name="observacao" id="observacao" cols="30" rows="4"><?= $observacaoCliente;?></textarea>
                    <p class="erro-input" id="erro-observacao"></p>
                    <br><br>
                    <input type="submit">
                </form>
            </div>

        </div>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/384370e6c4.js" crossorigin="anonymous"></script>
</html>