<?php
    $numeros = [1,2,3,4,5,6,7,8,9,10];
    $pares = [];

    foreach ($numeros as $valor) {
        if ($valor % 2 == 0) {
            array_push($pares, $valor);
           
        }
        
    }

    foreach ($pares as $valor) {
        echo "$valor <br>";
    }


?>