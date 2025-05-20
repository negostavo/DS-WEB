<?php
$subRota = $caminho[1] ?? null; //Verifica se há algo na segunda rota
require_once './models/produto.php';

if (preg_match('/^produto\/excluir\/([0-9]+)$/', $url, $matches)) {
    $id = $matches[1];
    $produto = new Produto;
    $produto->deleteProduto([":idProduto" => $id]);
    
    header("Location: /mvc_php/produto");
    exit;
}

switch($subRota){
    case '':
        require_once './models/produto.php';
        $produto = new Produto;
        $dados = $produto->queryAll();
        require_once './views/produtos/consultaProdutos.php';
        break;

    case 'cadastrar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
        extract($_POST);
        
        require_once './models/produto.php';
        $produto= new Produto;
        $produto->cadastro([
            ':nomeProduto'=>$nomeProduto,':precoProduto'=>$precoProduto,':estoqueProduto'=>$estoqueProduto
        ]);
        
        header("Location: /mvc_php/produto");

        break;
        }

        

    case 'cadastro':
        require_once './views/produtos/cadastroProduto.php';
        break;

    default:
        if(preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
            $id = $matches[1];

            require_once './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require_once './views/produtos/consultaProduto.php';
        }
        break;
}