<?php
$n = 1;
$a = 6;
$o = "/";
/*
printf("Digite o primeiro número que deseja calcular");
sscanf ("%d", &$n);
printf("Digite o segundo número que deseja calcular");
sscanf ("%d", &$a);
printf("Qual operação matemática você deseja fazer? \n +, -, /, *");
sscanf ("%d", &$o);
*/
if ($o == "+"){
    echo $n+$a;
}
else if ($o == "-"){
    echo $n-$a;
}
else if ($o == "/"){
    echo $n/$a;
}
else if ($o == "*"){
    echo $n*$a;
}
?>