<?php
$nascimento = filter_input(INPUT_POST, "nasc");
$ano = date("Y");
$resul = "";
if ($ano > $nascimento):
    $resul = $ano - $nascimento;
else:
    $resul = "Menos de 1 ano";
endif;
?>

<!DOCTYPE html>
<html lang= "pt-br">
<head>
    <meta charset= "utf-8">
</head>
<body>
    <form method= "post">
    <label> Qual o ano que você nasceu? <input type= "text" name= "nasc"/></label>
    <input type="submit" name= "btn-verificar" value= "nascimento">
    <?php 
    if ($ano > $nascimento):
        echo "Você tem " . $resul . " anos";
    else:
        echo "Menos de 1 ano";
    endif; 
    ?>
</body>
</html>