<h1>Produtos cadastrados</h1>

<table class="produtos">
    <tr>
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
        <th>Cadastrar</th>
        <th>Excluir</th>
    </tr>
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
                echo "<td><a href='produto/$idProduto'><button>Acessar Produto</button></a></td>";
                echo "<td><a href='produto/excluir/$idProduto'><button>Excluir</button></a><td>";
            echo "</tr>";
        }
    ?>
</table>
<br>
<a href="produto/cadastro"><button>Cadastrar produto</button></a>