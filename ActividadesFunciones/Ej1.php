Desarrollar una función que reciba como parámetros dos números y devuelva un
valor lógico que indique si el primer número es divisible por el segundo. <br>

<?php
    function esDivisible($num1, $num2) {
        return $num1 % $num2 == 0;
    }

    $num1 = 10;
    $num2 = 2;
    echo "¿$num1 es divisible por $num2? " . (esDivisible($num1, $num2) ? "Sí" : "No");
?>