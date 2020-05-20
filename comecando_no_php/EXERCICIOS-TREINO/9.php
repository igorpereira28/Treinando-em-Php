<?php
/*
Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior
ou menor que 18, 
exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.
*/

$n = "Marquin";
$i = 56;
if (($i >= 18) and $i < 21):
    echo "$n é maior de idade no Brasil, mas não é maior de idade ns EUA, pois ele tem $i anos";
elseif ($i >= 21):
    echo "$n é maior de idade e tem $i anos";
else:
    echo "$n não é maior de 18 e tem $i anos";
endif

?>