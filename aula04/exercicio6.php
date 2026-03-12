<?php

// 2. Faça um programa PHP que defina uma constante PI com valor 3.141592. Crie
// uma variável, atribua um valor que represente o raio de uma esfera. Calcule e
// apresente sua área e seu volume, dados pelas fórmulas:

    define(constant_name: "PI", value: 3.141592 );
    $r = 5;
    $area = 4* PI *($r**2);
    echo "valor da área: $area";
    $volume = (4/3)* PI *($r**3);
    echo "<br>valor do volume: $volume";


?>
