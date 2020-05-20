<?php
 
$array = values("d", "1", "b", "3", "a", "0", "c", "2");

sort($array); // Classifica o Array em ordem Crescente.

print_r($array); // Resultado: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => a [5] => b [6] => c [7] => d )

rsort($array); // Classifica o Array em ordem Decrescente.

print_r($array); // Resultado: Array ( [0] => d [1] => c [2] => b [3] => a [4] => 3 [5] => 2 [6] => 1 [7] => 0 )
?>