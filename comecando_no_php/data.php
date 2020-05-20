<?php

date_default_timezone_set('America/Sao_Paulo');

//dia
echo date("d". "\n");

//mês
echo date("m". "\n");

//ano com 2 digitos
echo date('y'. "\n");

//antes ou pós meio dia
echo date('a'. "\n");

//dia da semana 3 digitos
echo date('D'. "\n");

//mês escrito
echo date('M'. "\n");

//ano completo
echo date('Y'. "\n");

//dia da semana completo
echo date('l'. "\n");

//horario no formato de 12 horas
echo date('h'. "\n");

//horario no formato de 24 horas
echo date('H'. "\n");

//minutos
echo date('i' ."\n");

//segundos
echo date('s' ."\n");

//arruma a data pro "futuro"
$data_pagamento = mktime (15, 30, 00, 02, 15, 2026);
echo date('d/m/Y - H:i', $data_pagamento);
echo "\n";

//alinha a data no formato que desejar:
$data = '2019-05-16 12:21:00';
$data = strtotime($data);
echo date('d/m/y', $data);

//teste
echo date("\n" . 'd/m/Y H:i:s');

?>