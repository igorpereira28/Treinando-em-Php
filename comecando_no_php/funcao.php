<?php

function calculomedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1+$n2+$n3+$n4) / 4;
    if ($media <= 7){
        echo "$nome foi reprovado com a média $media. \n";
    }
    else {
        echo "$nome foi aprovado com a média $media. \n";
    }
}

calculomedia("Daivid", 2, 8, 10, 1);
