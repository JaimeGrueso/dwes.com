Desarrollar una función que emule el operador MOD. Recibe dos parámetros y
devuelve el resto de la división entera. <br>


<?php
    function modulo($num1, $num2) {
        return $num1 % $num2;
    }

    $num1 = 5;
    $num2 = 3;
    echo "El módulo de $num1 y $num2 es " . modulo($num1, $num2) . "<br>";
?>