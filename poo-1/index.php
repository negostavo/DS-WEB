<?php


// Classe Tablet
class tablet {
    //atributos
    public $cor;
    public $marca;
    public $largura;
    public $altura;
    public $tela;

    public function ligar () {
        return "Meu tablet liga. ";
    }
}

$samsung = new tablet();
$samsung->cor = "preto";
$samsung->marca = "samsung";
$samsung->largura = "1500px";
$samsung->altura = "620px";
$samsung->tela = "lcd";

echo "Tablet Samsung:<br>";
echo "Cor: " . $samsung->cor . "<br>";
echo "Marca: " . $samsung->marca . "<br>";
echo "Largura: " . $samsung->largura . "<br>";
echo "Altura: " . $samsung->altura . "<br>";
echo "Tela: " . $samsung->tela . "<br>";
echo $samsung->ligar() . "<br><br>"; // Exibe: "Meu tablet liga."

// Classe Avião
class aviao {
    //atributos
    public $modelo;
    public $marca;
    public $envergadura;
    public $tamanho;
    public $velocidade;

    public function voar () {
        return "Meu aviao voa. ";
    }
}

$latam = new aviao();
$latam->modelo = "boing";
$latam->marca = "latam";
$latam->envergadura = "50m";
$latam->tamanho = "50m";
$latam->velocidade = "1000km/h";

echo "Avião Latam:<br>";
echo "Modelo: " . $latam->modelo . "<br>";
echo "Marca: " . $latam->marca . "<br>";
echo "Envergadura: " . $latam->envergadura . "<br>";
echo "Tamanho: " . $latam->tamanho . "<br>";
echo "Velocidade: " . $latam->velocidade . "<br>";
echo $latam->voar() . "<br><br>"; // Exibe: "Meu aviao voa."

// Classe Répteis
class repteis {
    //atributos
    public $cor;
    public $escama;
    public $oviparo;
    public $rastejante;
    public $peconhento;

    public function sibilar () {
        return "Minha cobra sibila. ";
    }
}

$cobra = new repteis();
$cobra->cor = "verde";
$cobra->escama = "sim";
$cobra->oviparo = "sim";
$cobra->rastejante = "sim";
$cobra->peconhento = "sim";

echo "Cobra:<br>";
echo "Cor: " . $cobra->cor . "<br>";
echo "Escama: " . $cobra->escama . "<br>";
echo "Oviparo: " . $cobra->oviparo . "<br>";
echo "Rastejante: " . $cobra->rastejante . "<br>";
echo "Peçonhento: " . $cobra->peconhento . "<br>";
echo $cobra->sibilar() . "<br><br>"; // Exibe: "Minha cobra sibila."

// Classe Mamíferos
class mamiferos {
    //atributos
    public $cor;
    public $bipede;
    public $pulmoes;
    public $polegares;
    public $orgaos;

    public function andar () {
        return "Meu humano anda. ";
    }
}

$humano = new mamiferos();
$humano->cor = "preto";
$humano->bipede = "sim";
$humano->pulmoes = "2";
$humano->polegares = "sim";
$humano->orgaos = "sim";

echo "Humano:<br>";
echo "Cor: " . $humano->cor . "<br>";
echo "Bípede: " . $humano->bipede . "<br>";
echo "Pulmões: " . $humano->pulmoes . "<br>";
echo "Polegares: " . $humano->polegares . "<br>";
echo "Órgãos: " . $humano->orgaos . "<br>";
echo $humano->andar() . "<br><br>"; // Exibe: "Meu humano anda."

// Classe ContaBancaria
class ContaBancaria {
    public $numeroConta;
    public $titular;
    public $saldo;

    public function total(){
        return "O número da minha conta é " . $this->numeroConta . 
               "<br>O nome do titular é " . $this->titular . 
               "<br>O saldo disponível é " . $this->saldo;
    }
}

$bruno = new ContaBancaria();
$bruno->numeroConta = "123123123";
$bruno->titular = "Bruno Attina";
$bruno->saldo = "devedor";

echo "Conta do Bruno:<br>";
echo $bruno->total() . "<br><br>"; // Exibe os dados da conta do Bruno

$gu = new ContaBancaria();
$gu->numeroConta = "123123123";
$gu->titular = "Gustavo Ambidestro";
$gu->saldo = "milionário";

echo "Conta do Gustavo:<br>";
echo $gu->total() . "<br><br>"; // Exibe os dados da conta do Gustavo

$sarah = new ContaBancaria();
$sarah->numeroConta = "123123123";
$sarah->titular = "Sarah Souza";
$sarah->saldo = "milionária +1 real";

echo "Conta da Sarah:<br>";
echo $sarah->total() . "<br><br>"; // Exibe os dados da conta da Sarah
?>