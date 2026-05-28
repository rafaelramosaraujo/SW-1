<?php
    $numeros = [67,2,8,26,9,33];

    sort($numeros);

    foreach ($numeros as $valor) {
        echo $valor;
    }

    echo "<hr>";

    rsort($numeros);

    foreach ($numeros as $valor) {
        echo $valor;
    }

?>