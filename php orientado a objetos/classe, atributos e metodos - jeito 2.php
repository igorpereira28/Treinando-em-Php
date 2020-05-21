<?php
////Nesse jeito a função/método segue a ordem.

//Se quiser usar direto na classe, deve-se utilizar o "$this".
class Carros {
    //atributos - OBS: tem que colocar o public na frente.
    public $nome;
    public $marca;
    public $estilo;
    public $cor;

    //metodos ou funções - OBS: tem que colocar o public na frente.
    //Ações
    public function Andar(){
        echo "O carro " . $this -> nome . " da marca " . $this -> marca . " estilo " . $this -> estilo . 
    " da cor " . $this -> cor .  " acabou de sair da garagem.";
}
}

//Instanciar a classe.
$Corsa = new Carros();
$Corsa -> nome = "Corsa";
$Corsa -> marca = "Chevrolet";
$Corsa -> estilo = "Sedan";
$Corsa -> cor = "Preta";

$Corsa -> Andar();

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////