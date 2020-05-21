<?php
// pode ser editado na classe, acrescentando o get e o set.
class Veiculo{
    protected $modelo;

    public function Andar(){
        echo $this -> modelo . " andou";
    }

    public function Parar(){
        echo $this -> modelo . " parou";
    }
}

// pode ser editado na herança, acrescentando o get e o set.
class Carro extends Veiculo{
    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($l){
        $this -> modelo =$l;
    }

}

class Moto extends Veiculo{
    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($l){
        $this -> modelo =$l;
    }

    
}

$carro = new Carro();
$carro -> setModelo("Corsa");
$carro -> Andar();

echo "\n";

$moto = new Moto();
$moto -> setModelo("XJ");
$moto -> Parar();