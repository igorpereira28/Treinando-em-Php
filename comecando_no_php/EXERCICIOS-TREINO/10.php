<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo,
informar que não existe mês com este número.
*/

$n = 5;
if ($n == 1):
    echo "Janeiro";
elseif ($n == 2):
    echo "Fevereiro";
elseif ($n == 3):
    echo "Março";
elseif ($n == 4):
    echo "Abril";
elseif ($n == 5):
    echo "Maio";
elseif ($n == 6):
    echo "Junho";
elseif ($n == 7):
    echo "Julho";
elseif ($n == 8):
    echo "Agosto";
elseif ($n == 9):
    echo "Setembro";
elseif ($n == 10):
    echo "Outubro";
elseif ($n == 11):
    echo "Novembro";
elseif ($n == 12):
    echo "Dezembro";
else:
    echo "Não há esse mês no calendário";
endif

?>