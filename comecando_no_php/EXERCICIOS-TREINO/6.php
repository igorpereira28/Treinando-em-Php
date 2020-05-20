<?php

/*
6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus 
valores.
Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
*/

$a = 6;
$b = 7;

if ($a > $b):
    echo "$a $b";
elseif ($b > $a):
    echo "$b $a";
else:
    echo "Iguais";
endif

?>