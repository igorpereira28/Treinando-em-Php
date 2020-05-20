<?php
/*
3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. 
Ex:
Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6
*/
$p = 0;
$n = 2;
if ($n >= 1){
    do {
        $m = $n * $n--;
        $p = $m + $p;
        echo $m;
    } while ($n >= 1);

    if ($n == 0){
        echo "1";
    }
}
elseif ($n < 0){
        echo "Número Invalido";
}


$numero = 2;
$v = array_product(range($numero, 1));
print_r("\n". $v);  