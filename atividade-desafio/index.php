<?php

class Pessoa {
    public $nome = "Rasmus";
    protected $idade = 48;

    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
    }
}

class Funcionario extends Pessoa {
    
}

class Gerente extends Funcionario {
    protected $salario = 1000;
    public $nome = "scudeler";
    protected $idade = 50;

    public function calcularBonus() {
        $this->salario += ($this->salario / 100) * 20;
    }

    public function verDados() {
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->salario . "<br/>";
    }
}

class Desenvolvedor extends Funcionario {
    protected $salario = 500;
    public $nome = "bruno";
    protected $idade = 50;

    public function calcularBonus() {
        $this->salario += ($this->salario / 100) * 20;
    }

    public function verDados() {
  
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->salario . "<br/>";
    }
}


$gerente = new Gerente();
$gerente->calcularBonus();
$gerente->verDados();

$desenvolvedor = new Desenvolvedor();
$desenvolvedor->calcularBonus();
$desenvolvedor->verDados();

echo "<br/>";

//atividade 2
abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal {

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$piupiu = new Passaro();

echo $piupiu->falar() . "<br/>";
echo $piupiu->mover() . "<br/>";

echo "<br/>";

//atividade 3

class Veiculo {
    public $marca = "bmw";
    public $modelo = "busao";
    private $velocidade;

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($v) {
        $this->velocidade = $v;
    }

    public function acelerar() {
        echo "O veículo está acelerando <br>" ;
    }
}

//atividade 4

abstract class Produto {
    protected $nome;
    protected $preco;
    protected $estoque;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    abstract public function calcularDesconto();

    public function aplicarDescontoExtra() {
        if ($this->estoque < 5) {
            return 0.10;
        }
        return 0;
    }
}

class Eletronico extends Produto {
    public function calcularDesconto() {
        return 0.10;
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        return 0.20;
    }
}

$produto1 = new Eletronico();
$produto1->setNome("Smartphone");
$produto1->setPreco(1000);
$produto1->setEstoque(3);

$produto2 = new Roupa();
$produto2->setNome("Camiseta");
$produto2->setPreco(50);
$produto2->setEstoque(10);

echo "Produto: " . $produto1->getNome() . "<br>";
echo "Preço original: R$" . $produto1->getPreco() . "<br>";

$desconto1 = $produto1->calcularDesconto() + $produto1->aplicarDescontoExtra();
$precoFinal1 = $produto1->getPreco() * (1 - $desconto1);

echo "Desconto total: " . ($desconto1 * 100) . "<br>";
echo "Preço final: R$" . $precoFinal1 . "<br><br>";

echo "Produto: " . $produto2->getNome() . "<br>";
echo "Preço original: R$" . $produto2->getPreco() . "<br>";

$desconto2 = $produto2->calcularDesconto();
$precoFinal2 = $produto2->getPreco() * (1 - $desconto2);

echo "Desconto: " . ($desconto2 * 100) . "<br>";
echo "Preço final: R$" . $precoFinal2 . "<br>";

echo "<br>";
echo "<br>";


//atividade 5
class Documento {
    private $number;

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }
}

class CPF extends Documento {

    public function validar() {

        $cpf = $this -> getNumber();
        $cpf = preg_replace('/[^0-9]/', "", $cpf);

    if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
        return false;
    }

    $number_quantity_to_loop = [9, 10];

    foreach ($number_quantity_to_loop as $item) {

        $sum = 0;
        $number_to_multiplicate = $item + 1;
    
        for ($index = 0; $index < $item; $index++) {

            $sum += $cpf[$index] * ($number_to_multiplicate--);
    
        }

        $result = (($sum * 10) % 11);

        if ($cpf[$item] != $result) {
            return false;
        }

    }

    return true;

}
}
$cpf = new CPF();
$cpf -> setNumber ("54862903819");

if ($cpf -> validar()){
    echo "CPF válido";
}else{
    echo"CPF inválido";
}

?>

