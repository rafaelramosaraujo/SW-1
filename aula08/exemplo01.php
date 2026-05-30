<?php
    $frutas = ["maçã","banana","laranja"];

    // echo $frutas;
    // echo $frutas[0];

    // foreach ($frutas as $indice => $valor) {
    //     echo "indice: $indice ==> $valor <br>";
    // }

    // foreach ($frutas as $valor) {
    //     echo "fruta: $valor <br>";
    // }

    // $qntde = count($frutas);

    // for ($i=0; $i <= $qntde-1 ; $i++) { 
    //     // echo $i . "<br>";
    //     echo "$frutas[$i] <br>";
    // }

    $animais = ["gato","cachorro"];
    $animais[] = "passarinho";

    // foreach ($animais as $valor) {
    //    echo "$valor <br>";
    // }

    $animais[1] = "tartaruga";
    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    array_push($animais,"peixe");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_pop($animais);
    
    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_unshift($animais,"cachorro");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }



?>