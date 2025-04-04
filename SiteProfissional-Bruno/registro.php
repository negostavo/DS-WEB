<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
<div class="tudo">
        <div class="menu">
            <ul>
                <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
                <li><a href="venda.php" class="meumenu meumenu-active" title="Vendas">Registro</a></li>
                <li><a href="venda.php" class="meumenu" title="Vendas">Voltar</a></li>
                
            </ul>
            
        </div>
        <div class="menu">
                <h2>Histórico de compras realizadas </h2>
        </div>
        
        


        <?php
include 'conexao.php';

$dados = $db->query("SELECT * FROM vendas");
$vendas = $dados->fetchAll(PDO::FETCH_ASSOC);

$dados = $db->query("SELECT * FROM produtosvendidos");
$produtosRef = $dados->fetchAll(PDO::FETCH_ASSOC);

$dados = $db->query("SELECT * FROM clientes");
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

$dados = $db->query("SELECT * FROM produtos");
$produtos = $dados->fetchAll(PDO::FETCH_ASSOC);

$nomesClientes = [];
foreach ($clientes as $cliente) {
    $nomesClientes[$cliente['id']] = $cliente['nome'];
}

$nomesProdutos = [];
foreach ($produtos as $produto) {
    $nomesProdutos[$produto['id']] = $produto['nome'];
}

echo "<table id='clientes'>";
echo "
<tr>
    <th>ID Venda</th>
    <th>Data</th>
    <th>Cliente</th>
    <th>Produto</th>
    <th>Preço</th>
    <th>Quantidade</th>
</tr>";

foreach ($vendas as $venda) {
    extract($venda);
    $clienteNome = $nomesClientes[$idCliente];

    $produtosVenda = array_filter($produtosRef, fn($produto) => $produto['idVenda'] == $venda['id']);

    if (!empty($produtosVenda)) {
        $primeiroProduto = true;
        foreach ($produtosVenda as $produto) {
            echo "<tr>";
            if ($primeiroProduto) {
                echo "<td>$id</td>";
                echo "<td>$dataVenda</td>";
                echo "<td>$clienteNome</td>";
                $primeiroProduto = false;
            } else {
                echo "<td>$id</td>"; 
                echo "<td>$dataVenda</td>";
                echo "<td>$clienteNome</td>"; 
            }
            echo "<td>{$nomesProdutos[$produto['idProduto']]}</td>";
            echo "<td>{$produto['preco']}</td>";
            echo "<td>{$produto['quantidade']}</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
                    <td>$id</td>
                    <td>$dataVenda</td>
                    <td>$clienteNome</td>
                    <td colspan='3'>Sem produtos</td>
                </tr>";
    }
}

echo "</table>";
?>
</body>
</html>