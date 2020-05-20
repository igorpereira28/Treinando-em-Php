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
<h1> Bem vindo as operações</h1>
        <label>Digite o primeiro número: <input type="text" name="txtn1"/></label><br>
        <label>Digite o segundo número: <input type="text" name="txtn2"/></label><br>
           <input type="radio" id="+" name="calculo" value="+">
            <label for="+">Adição</label><br>
            <input type="radio" id="-" name="calculo" value="-">
            <label for="-">Subtração</label><br>
            <input type="radio" id="x" name="calculo" value="x">
            <label for="x">Multiplicação</label> <br>
            <input type="radio" id="/" name="calculo" value="/">
            <label for="/">Divisão</label>
       </label><br>
       <input type="submit" name= "btn-operar" value= "Calcular">
        Resultado: <?php 
if ($calcular == "+"):
    echo $number1 + $number2;
elseif ($calcular == "-"):
    echo $number1 - $number2;
elseif ($calcular == "x"):
    echo $number1 * $number2;
elseif ($calcular == "/"):
    echo $number1 / $number2;
endif;
?>
</form>
</body>
</head>
</html>