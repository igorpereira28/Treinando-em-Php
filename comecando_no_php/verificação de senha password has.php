<?php

$senha = 'alfabeto';
/*
$validesenha = 'Senha que aparecer no hash - na criptografia';
*/
$validesenha = '$2y$10$7y8LyxQcdIbOTn88fR6Bi.Wk2FpBjVFRDKVcqmdcv5o1Jqpf1xSdS';

if (password_verify($senha, $validesenha)):
    echo "Senha valida";
else:
    echo "Senha invalida";

endif;

?>