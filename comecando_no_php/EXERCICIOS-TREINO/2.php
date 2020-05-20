<?php
/*
2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número 
solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.
*/
$n = 6;
echo "A tabuado do $n é: \n";
foreach (range(0, 10) as $m){
    echo "$n x $m = ". $n*$m. "\n";
}