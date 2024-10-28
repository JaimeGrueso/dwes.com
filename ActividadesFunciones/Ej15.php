Desarrollar una función que reciba como parámetros dos números más un tercero. El
último indica el tipo de operación a realizar con los dos primeros según el siguiente
esquema:
• 1 Suma
• 2 Resta
• 3 Multiplicación
• 4 División
• 5 Potencia (Elevar el primer parámetro a la potencia del segundo parámetro)

Si no se pasa el tercer parámetro, su valor por defecto es 1. <br>

<?php
    function operacion($num1, $num2, $operacion = 1) {
        switch ($operacion) {
            case 1:
                return $num1 + $num2;
            case 2:
                return $num1 - $num2;
            case 3:
                return $num1 * $num2;
            case 4:
                return $num1 / $num2;
            case 5:
                return pow($num1, $num2);
            default:
                return "Operación no válida";
        }
    }

    $num1 = 5;
    $num2 = 3;
    echo "La suma de $num1 y $num2 es " . operacion($num1, $num2, 1) . "<br>";

    $num1 = 5;
    $num2 = 3;
    echo "La resta de $num1 y $num2 es " . operacion($num1, $num2, 2) . "<br>";

    $num1 = 5;
    $num2 = 3;
    echo "La multiplicación de $num1 y $num2 es " . operacion($num1, $num2, 3) . "<br>";

    $num1 = 5;
    $num2 = 3;
    echo "La división de $num1 y $num2 es " . operacion($num1, $num2, 4) . "<br>";

    $num1 = 5;
    $num2 = 3;
    echo "La potencia de $num1 elevado a $num2 es " . operacion($num1, $num2, 5) . "<br>";

    $num1 = 5;
    $num2 = 3;
    echo "La operación de $num1 y $num2 es " . operacion($num1, $num2, 6) . "<br>";
?>