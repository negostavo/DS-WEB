<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/icon.svg">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <div class="tudo">
        <div class="menu">
        <ul>
            <li><a href="../index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="../cliente/cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
            <li><a href="../produto/produto.php" class="meumenu meumenu-active" title="Produtos">Produtos </a></li>
            
        </ul>
        
        </div>
        <div class="container">
            <hr>
            <div class="formulario">
                <form action="insertion.php" method="POST" name = "formulario" onsubmit= "return validarProduto()">
                    <label for="cod">Código do produto: </label>
                    <input type="number" min="0" step="1" max="99999" name="codigoProduto" id="cod" id = "validarInput" placeholder="Codigo do protudo até 5 caracteres" required>
                    <p class="erro-input" id="erro-cod"></p>
                    
                    <label for="produto">Produto: </label>
                    <input type="text" name="nomeProduto" id="produto" placeholder="Insira o nome do produto" required>
                    <p class="erro-input" id="erro-produto"></p>
                    
                    <label for="estoque">Estoque de produtos</label>
                    <input type="number" name = "estoque" id = "estoque" id = "validarInput" placeholder="Digite a quantidade do produto" required> 
                    <p class="erro-input" id="erro-estoque"></p>

                    <label for="preco">Preço</label>
                    <input type="float" name = "preco" id = "preco" id = "validarInput" placeholder="Insira o preço por Kg (Utilize . )" required> 
                    <input type="submit">       
                    <p class="erro-input" id="erro-preco"></p>

                </form>
        
                <table id ="clientes">
            <tr>
                <th>Código do produto </th>
                <th>produto </th>
                <th>Estoque </th>
                <th>Preço</th>
                <th>Editar </th>
                <th>Excluir </th>
            </tr>
            <?php
            include '../conexao.php';

            echo "<h2>Produtos cadastrados:</h2>";
            $dados = $db->query("SELECT * FROM produtos");
            $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
            foreach($todos as $linha){
                $idProduto = $linha ['idProduto'];
                $nomeProduto = $linha['nomeProduto'];
                $codigoProduto = $linha['codigoProduto'];
                $estoque = $linha['estoque'];
                $preco = $linha['preco'];

                echo"
                    <tr>
                        
                        <td>$codigoProduto</td>
                        <td>$nomeProduto</td>
                        <td>$estoque</td>
                        <td>R$ $preco</td>
                        <td><a href= 'produtoAlteracao.php?id=$idProduto'><i class='fa-solid fa-pen'></i></a></td>
                        <td><a href= 'deleteProduto.php?id=$idProduto'><i class='fa-solid fa-trash-can'></i></a></td>
                    </tr>
            ";
            }
            ?>
    </div>

</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/0c171f108a.js" crossorigin="anonymous"></script>
</html>