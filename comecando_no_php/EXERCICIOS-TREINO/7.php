<?php
/*
Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B.
A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.
*/

$a = 0;
$b = 0;

if ($a > $b):
    echo "A maior que B";
elseif ($a == $b):
    echo "São Iguais";
else:
    echo "B maior que A";
endif

?>