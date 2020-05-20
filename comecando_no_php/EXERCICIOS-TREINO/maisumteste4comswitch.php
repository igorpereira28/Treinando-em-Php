<?php

$number1= filter_input(INPUT_POST, "txtn1");
$number2= filter_input(INPUT_POST, "txtn2");
$calcular= filter_input(INPUT_POST, "calculo");


?>

<!DOCTYPE html>
<hmtl lang = "pt-br">
<head>
<meta charset="utf-8">
<title>Operações</title>
</head>
<body>
<form method="post">
 
        Resultado: <?php 
if ($number1 and $number2):
    switch ($calcular):
    case ("+"):
    echo $number1 + $number2;
    break;
    case ("-"):
    echo $number1 - $number2;
    break;
    case ("x"):
    echo $number1 * $number2;
    break;
    case ("/"):
    echo $number1 / $number2;
    break;
    endswitch;
endif;
?>
</form>
</body>
</head>
</html>