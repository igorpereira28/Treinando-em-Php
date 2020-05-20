<?php

function mes($mess){
    $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril',
    'Maio', 'Junho', 'Julho', 'Agosto',
    'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    if ($mess >=1 and $mess <= 12){
        echo $meses[$mess - 1];
    }
    else{
        echo "Mês Invalido";
    }
}
