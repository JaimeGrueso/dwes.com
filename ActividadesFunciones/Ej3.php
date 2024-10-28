Desarrollar una función que devuelva un valor lógico y tenga dos parámetros. Si el
primer parámetro es divisible por el segundo, devuelve Verdadero, Falso en caso
contrario. <br>

<?php
    function esDivisible($num1, $num2) {
        return $num1 % $num2 == 0;
    }

    $num1 = 10;
    $num2 = 2;
    echo "¿$num1 es divisible por $num2? " . (esDivisible($num1, $num2) ? "Verdadero" : "Falso");

    echo "<br>";

    $num1 = 10;
    $num2 = 3;
    echo "¿$num1 es divisible por $num2? " . (esDivisible($num1, $num2) ? "Verdadero" : "Falso");
?>