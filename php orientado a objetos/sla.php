<?php
$a = 1;

if(++$a == 3) echo 3;
elseif(++$a == 2) echo 2;
elseif(++$a == 1) echo 1;
else echo "No match!";

// Outputs: 2

$a = 1;

switch(++$a) {
    case 3: echo 3; break;
    case 2: echo 2; break;
    case 1: echo 1; break;
    default: echo "No match!"; break;
}

// Outputs: 1
?>