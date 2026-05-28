<?php
    $cores = ["azul","amarelo","marrom"];

    array_push($cores,"branco");

    array_shift($cores);
    
    foreach ($cores as $valor) {
        echo "$valor <br>";
    }


?>