<?php

/*
1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
*/

$n = 0;
if ($n > 0):
    echo "Valor Positivo";
elseif ($n < 0):
    echo "Valor Negativo";
else:
    echo "Igual a Zero";
endif

?>