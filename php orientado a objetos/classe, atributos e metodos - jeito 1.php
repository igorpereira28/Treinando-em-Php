<?php
//Nesse jeito a função/método vai primeiro.

//Classe - OBS: é bom colocar o primeiro nome da classe em maiúsculo.
class Carros {
    //atributos - OBS: tem que colocar o public na frente.
    public $nome;
    public $marca;
    public $estilo;
    public $cor;

    //metodos ou funções - OBS: tem que colocar o public na frente.
    //Ações
    public function Andar(){
        echo "Andou na pista";
}
}

//Instanciar a classe.
$Corsa = new Carros();
$Corsa -> nome = "Corsa";
$Corsa -> marca = "Chevrolet";
$Corsa -> estilo = "Sedan";
$Corsa -> cor = "Preta";

//dar a "ação" ao objeto.
$Corsa -> Andar();
echo "\n";

//Se quiser usar da forma padrão.
echo " o carro " . $Corsa -> nome . " da marca " . $Corsa -> marca . " estilo " . $Corsa -> estilo . 
    " da cor " . $Corsa -> cor .  $Corsa -> Andar();


////////////////////////////////////////////////////////////////////////////////////////////////////////////

