<?php
class Pessoa{
    public $nome;
    public $idade;
    public $peso;

    public function andar(){
        echo "andar andar";
    }

    public function falar(){
        echo "bla bla bla";
    }

    public function imprimirDados(){
        echo $this->nome;
        echo $this->idade;
        echo $this->peso;
    }

}

$cauane = new Pessoa();
$cauane -> nome = "Cauane";
$cauane -> idade = 23;
$cauane -> peso = 71;

$mikaela = new Pessoa();
$mikaela -> nome = "Mikaela";
$mikaela -> idade = 14;
$mikaela -> peso = 47;

$cauane->imprimirDados();

$cauane -> andar();
$cauane -> falar();

