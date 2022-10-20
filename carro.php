<?php
class Carro{
    public $cor;
    public $marca;
    public $modelo;
    public $chassi;

    public function ligar(){
        echo "ligar VRUMMM";
    }

    public function frear(){
        echo "freiaaa";
    }

    public function imprimirDados(){
        echo $this->cor;
        echo $this->marca;
        echo $this->modelo;
        echo $this->chassi;
    }

}

$uno = new Carro();
$uno -> cor = "prata";
$uno -> marca = "fiat";
$uno -> modelo = "uno";
$uno -> chassi = "1234567890";

$ka = new Carro();
$ka -> cor = "preto";
$ka -> marca = "ford";
$ka -> modelo = "ka";
$ka -> chassi = "0987654321";


$uno->imprimirDados();

$uno -> ligar();
$uno -> frear();