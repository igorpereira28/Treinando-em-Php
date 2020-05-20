<?php
$n = 5;
$a = 4;
$o = "+";

/*
print("Digite o primeiro número que deseja calcular");
return $n;
print("Digite o segundo número que deseja calcular");
return $a;
print("Qual operação matemática você deseja fazer? \n +, -, /, *");
return $o;
*/
if ($o == "+"):
    echo $n+$a;
elseif ($o == "-"):
    echo $n-$a;
elseif ($o == "/"):
    echo $n/$a;
elseif ($o == "*"):
    echo $n*$a;
endif;
?>