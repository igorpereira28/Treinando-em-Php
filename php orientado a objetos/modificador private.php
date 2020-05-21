<?php
// só pode ser editado na classe, acrescentando o get e o set.
class Veiculo{
    
    protected $modelo;
    public function getModelo(){
        return $this -> modelo;
    }
   
    public function setModelo($l){
        $this -> modelo =$l;
    }
    
    public function Andar(){
        echo $this -> modelo . " andou";
    }

    public function Parar(){
        echo $this -> modelo . " parou";
    }
}

class Carro extends Veiculo{

}

class Moto extends Veiculo{
    
}

$carro = new Carro();
$carro -> setModelo("Corsa");
$carro -> Andar();

echo "\n";

$moto = new Moto();
$moto -> setModelo("XJ");
$moto -> Parar();