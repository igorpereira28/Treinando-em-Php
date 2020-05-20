<?php

function calculomodulo($n){
    if ($n % 2 == 0){
        echo "Par";
    }
    else{
        echo "Impar";
    }
}


//EXEMPLOS

/* 
se abrir outro arquivo para ir na função para editar, atualizar, mexer, etc, é só acrescentar 
abrir e no novo arquivo colocar:

    include('nome da pasta onde esta/nome do arquivo');
    nome da função('valor');

*/

/*
se estiver em outra local, em outra pasta:

    include('C://Users//isilva//Desktop//testessssss.php');
    nome da função('valor');
*/
