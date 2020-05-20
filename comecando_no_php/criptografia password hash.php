<?php

$senha = 'alfabeto';

$novasenha = password_hash($senha, PASSWORD_DEFAULT);
echo $novasenha;


?>