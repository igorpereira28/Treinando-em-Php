<?php
$n = array (1=>"gol", 2=>"camaro", 3=>"fusca", 4=>"jetta");
/*echo $n [3];
echo "\n";
*/
$quantosCarros = count($n);
echo "Tem $quantosCarros carros na garagem,dentre eles estão: " ;
echo "\n";

foreach($n as $valor)
{
    echo "$valor\n";
}
?>