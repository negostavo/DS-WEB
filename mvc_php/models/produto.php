<?php

require './models/database.php';

class Produto{
    private $conexao;

    public function __construct(){
        $this->conexao = new Database;
    }

    public function queryOne($parameters){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos WHERE idProduto = :idProduto", $parameters);
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function queryAll(){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    public function cadastro(array $parameters = []){

     $sql= "INSERT INTO produtos (nomeProduto, precoProduto, estoqueProduto)
     VALUES (:nomeProduto, :precoProduto, :estoqueProduto)";
    $this->conexao->executeQuery($sql, $parameters);
    }

    public function deleteProduto($parameters){
        $sql =  "DELETE FROM produtos WHERE idProduto = :idProduto";
        $this->conexao->executeQuery($sql, $parameters);

    }
    


}