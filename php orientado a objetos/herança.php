<?php
/*
Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar
códigos ou compartamentos generalizados.
*/

//ao invés de fazer 2 ou mais classes com os mesmos atributos e métodos, utiliza-se:

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo $this -> modelo . " da cor " . $this -> cor . " do ano de " . $this -> ano . " andou";
    }

    public function Parar(){
        echo $this -> modelo . " da cor " . $this -> cor . " do ano de " . $this -> ano . " parou";
    }
}

class Carro extends Veiculo{
    //pode acrescentar mais se quiser, por ser método especifico.
    public function Limparparabrisa(){
        echo "Limpar parabrisa";
    }
}

class Moto extends Veiculo{
    //pode acrescentar mais se quiser, por ser método especifico.
    public function Colocarcapacete(){
        echo "Colocando capacete";
    }
    
}

$carro = new Carro();
$carro -> modelo = "Corsa";
$carro -> cor = "cinza";
$carro -> ano = "99";
$carro -> Andar();
echo "\n";
$carro -> Limparparabrisa();

echo "\n";

$moto = new Moto();
$moto -> modelo = "XJ";
$moto -> cor = "marron";
$moto -> ano = "98";
$moto -> Parar();
echo "\n";
$moto -> Colocarcapacete();