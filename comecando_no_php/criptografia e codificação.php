<?php

//CRIPTOGRAFIA E CODIFICAÇÃO DE SENHA

$senha = 123456;

//Utilizando base 64, dá para criptografar e codificar - mão dupla. 

//criptografia:
$novasenha = base64_encode($senha);

echo $novasenha;

echo "\n";

//decriptografia/codificar:
$recuperandosenha = base64_decode($novasenha);

echo $recuperandosenha;


echo "\n";


//Utilizadno md5 , só da para criptografar - mão única.

echo md5 ($senha);

echo "\n";

//Utilizando o sha1, só da para criptogradar - mão única.

echo sha1($senha);

?>