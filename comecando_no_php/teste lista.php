<?php



$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril',
            'Maio', 'Junho', 'Julho', 'Agosto',
            'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

$mes = 6;

if ($mes >= 1 and $mes <= 12):
    echo $meses[$mes - 1];
else:
    echo "Mês Invalido";
endif;