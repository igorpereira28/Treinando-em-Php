<?php
/*
Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as 
insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, 
caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
*/

  $notas = [10, 10, 10, 10,5, 9, 5, 10];
  $smTotal = 0;
 
  for($i = 0; $i < count($notas); $i++){
    $smTotal += $notas[$i];
  }
 
  $resultado = $smTotal / count($notas);
 
  if($resultado >= 7){
    echo "Aprovado, média final {$resultado} \n";
  }else{
    echo "Reprovado, média final {$resultado} \n";
  }

  $n = 2;
  $m = 10;
  $o = 3;
  $soma = $n+$m+$o;
  $div = $soma / 3;
  if ($div >= 5):
    echo "Aprovado, média final $div";
  else:
    echo "Reprovado, média final $div";
  endif
?>