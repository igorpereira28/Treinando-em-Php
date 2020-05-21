<?php

class Casa{
    public $cep;
    public $numero;
    public $cor;

    public function agitada(){
        echo "Tem muita gente na casa";
    }
    public function getCep(){
        return $this -> cep;
    }
    
}

$apartamento = new Casa();
$apartamento -> cep = 12224586;
$apartamento -> numero = 365;
$apartamento -> cor = "amarelo";
echo $apartamento -> getCep();
echo "\n";
$apartamento -> agitada();