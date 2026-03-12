<?php
    $a = 4;
    $b = 8;
    $r = (($a==$b) || ($a+$b==12));

    if ($r === 1) {
        echo "Verdadeiro";
    } else {
        echo "Falso";
    }

?>