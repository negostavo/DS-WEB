<?php
//bruno, consegui apagar todo meu codigo sem querer pq substitui o arquivo e salvei... tive q refazer boa parte
class Pessoa {
    protected $nome;
    protected $idade;

    public function setDados($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Funcionario extends Pessoa {
    protected $salario;
    protected $cargo;

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function calBonus() {
        if ($this->cargo == "gerente") {
            $bonus = (($this->salario / 100) * 20);
            return $this->salario + $bonus;
        }
        if ($this->cargo == "desenvolvedor") {
            $bonus = (($this->salario / 100) * 10);
            return $this->salario + $bonus;
        } 
    }
}

class Gerente extends Funcionario {
}

class Desenvolvedor extends Funcionario {
}

$gerente = new Gerente();
$desenvolvedor = new Desenvolvedor();

$gerente->setDados("ambidestro", 35);
$gerente->setSalario(10000);
$gerente->setCargo("gerente");

$desenvolvedor->setDados("sarah", 22);
$desenvolvedor->setSalario(3504);
$desenvolvedor->setCargo("desenvolvedor");

echo "O total que o gerente " . $gerente->getNome() . " vai ganhar junto com o bonus " . $gerente->calBonus();
echo "O total que o desenvolvedor " . $desenvolvedor->getNome() . " vai ganhar junto com o bonus " . $desenvolvedor->calBonus();

//lição 2

abstract class Animal {
    public $tipo;
    public function mover(){
        echo "O animal anda";
    }
    public function fazerSom(){}

    }
    class Cachorro extends Animal {
        public function fazerSom() {
        echo "Au Au!";
    }}
    class Gato extends Animal {
    
        public function fazerSom() {
        echo "miauuuu!";
    }}
    class Passaro extends Animal {
        public function mover(){
            parent::mover();
            echo " e voa!";
        }
        public function fazerSom() {
        echo "piu piu";
    }

}
$Cachorro = new Cachorro();
echo "<br>";
$Cachorro->fazerSom();
echo "<br>";
$Cachorro->mover();
echo "<br>";
$Cachorro->tipo ="Cachorro";
echo "<br>";

$Passaro = new Passaro();
echo "<br>";
$Passaro->fazerSom();
echo "<br>";
$Passaro->mover();
echo "<br>";
$Passaro->tipo = "Passaro";
echo "<br>";

$Gato = new Gato();
echo "<br>";
$Gato->fazerSom();
echo "<br>";
$Gato->mover();
echo "<br>";
$Gato->tipo = "Gato";
echo "<br>";

//lição 3
class Veiculo {
    public $modelo;
    public $marca;
    private $velocidade;

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }
}
class Carro extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade()+10);
        echo "O carro está acelerando... Velocidade atual: " . $this->getVelocidade() . " km/h\n";
    }
}
class Moto extends Veiculo {
    public function acelerar() {
        $this->setVelocidade($this->getVelocidade() + 10);
        echo "A moto está acelerando... Velocidade atual: " . $this->getVelocidade() . " km/h\n";
    }
}

$carro = new Carro();
$carro->modelo = "Fusca";
$carro->marca = "Volkswagen";
$carro->setVelocidade(20);

$moto = new Moto();
$moto->modelo = "CG";
$moto->marca = "Honda";
$moto->setVelocidade(40);

echo "Carro: " . $carro->modelo . " - " . $carro->marca . "\n";
echo "<br>";
echo "<br>";
echo "Moto: " . $moto->modelo . " - " . $moto->marca . "\n";
echo "<br>";
echo "<br>";

$carro->acelerar();
echo "<br>";
$moto->acelerar();
echo "<br>";
echo "<br>";


$moto->acelerar();
echo "<br>";
$moto->acelerar();

//questao 4
abstract class Produto {
    private $nome;
    private $preco;
    private $estoque;
    private $tipo;

    public function setDados($nome, $preco, $estoque, $tipo) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->tipo = $tipo;
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
}

class Eletronico extends Produto {
    public function calcularDesconto() {
        $desconto = ($this->getPreco() / 100) * 10;
        if ($this->getEstoque() < 5) {
            $descontoExtra = ($this->getPreco() / 100) * 10;
            return $this->getPreco() - $desconto - $descontoExtra;
        } else {
            return $this->getPreco() - $desconto;
        }
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        $desconto = ($this->getPreco() / 100) * 20;
        if ($this->getEstoque() < 5) {
            $descontoExtra = ($this->getPreco() / 100) * 10;
            return $this->getPreco() - $desconto - $descontoExtra;
        } else {
            return $this->getPreco() - $desconto;
        }
    }
}

$eletronico = new Eletronico();
$eletronico->setDados(nome: "Smartphone", preco: 2000, estoque: 3, tipo: "Eletronico");

$roupa = new Roupa();
$roupa->setDados(nome: "Camisa", preco: 50, estoque: 2, tipo: "Roupa");

echo "Preço final do " . $eletronico->getNome() . ": R$" . $eletronico->calcularDesconto() . "\n";
echo "<br>";
echo "Preço final da " . $roupa->getNome() . ": R$" . $roupa->calcularDesconto() . "\n";

//lição 5
class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function validar() {
        $cpf = $this->getNumero();
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
$cpf->setNumero("654.424.800-29");

if ($cpf->validar()) {
    echo "CPF válido";
} else {
    echo "CPF inválido";
}
?>