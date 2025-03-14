<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guerine Hortifruti - Clientes</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/icon.svg">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <div class="tudo">
        <div class="menu">
            <ul>
                <li><a href="../index.php" class="meumenu  " title="Home">Home</a></li>
                <li><a href="cliente.php" class="meumenu meumenu-active" title="Clients">Clientes </a></li>
                <li><a href="../produto/produto.php" class="meumenu" title="Products">Produtos </a></li>

            </ul>
        
        </div>
        <div class="container">
            <hr>
            <div class="formulario">
                <form action="insertion.php" method="POST" name = "formulario" onsubmit= "return validarDadosCliente()">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" placeholder="Digite o nome do cliente" required>
                    <p class="erro-input" id="erro-nome"></p>
                    
                    <label for="email">E-mail: </label>
                    <input type="text" name="email" placeholder="Digite o E-mail do cliente" required>
                    <p class="erro-input" id="erro-email"></p>
                    
                    <label for="observacao">observação do ciente</label>
                    <textarea name="observacao" id="observacao" cols="30" rows="4" placeholder="Faça um observação" required></textarea>
                    <input type="submit">    
                    <p class="erro-input" id="erro-observacao"></p>

                </form>
                <table id ="clientes">
                    <tr>
                        <th>Nome </th>
                        <th>Email </th>
                        <th>Observação </th>
                        <th>Editar </th>
                        <th>Excluir </th>
                    </tr>
                    <!-- exibição em php-->
                    <?php
                        include '../conexao.php';

                        echo "<h2>Clientes cadastrados:</h2>";
                        $dados = $db->query("SELECT * FROM clientes");
                        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
                        foreach($todos as $linha){
                            $idCliente = $linha['id'];
                            $nomeCliente = $linha['nome'];
                            $emailCliente = $linha['email'];
                            $observacao = $linha['observacao'];

                            echo"
                                <tr>
                                    <td>$nomeCliente</td>
                                    <td>$emailCliente</td>
                                    <td>$observacao</td>
                                    <td><a href= 'clienteAlteracao.php?id=$idCliente'><i class='fa-solid fa-pen'></i></a></td>
                                    <td><a href= 'delete.php?id=$idCliente'><i class='fa-solid fa-trash-can'></i></a></td>
                                </tr>
                        ";
                        }
                        
                    ?>
                </table>
            
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/0c171f108a.js" crossorigin="anonymous"></script>
</html>