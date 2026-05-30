<?php
    //exercicio 1
     $nomes = ["Ramos","Vini","Mariana","Rafael","Samir"];

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    //exercicio 2
    array_unshift($nomes,"Brayan");

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    //exercicio 3
    $nomes[1] = "gustavo";
    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    //exercicio 4
    $numeros = [67,2,8,26,9,33,10,55,4,17];

    foreach ($numeros as $valor) {
         echo "$valor, ";
    }

    echo"<br>";

    $qtde = count($numeros);
    $soma = 0;

    for ($i= 0 ; $i <= $qtde -1; $i++) { 
        $soma = $soma + $numeros[$i];
        
    }
    $media = $soma / $qtde;
    echo"a média é: $media";
    echo"<hr>";

    //exercicio 5
    $dias = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    for($dia = 1; $dia < 6; $dia++){
        echo $dias[$dia]. "<br>";
    }


?>