<?php

// 16) Considerando o trecho abaixo:

$a = 5;
$b = 10;
$r = (($a<=$b) XOR (2*$a==$b));

if ($r === 1) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

    // será exibido: b) Falso

?>
