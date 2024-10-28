Desarrollar una función llamada max_de_tres() que tome tres números como
parámetros y devuelva el mayor de ellos. <br>

<?php
    function max_de_tres($num1, $num2, $num3) {
        return max($num1, $num2, $num3);
    }

    $num1 = 5;
    $num2 = 10;
    $num3 = 3;

    echo "El mayor de los tres numeros es " . max_de_tres($num1, $num2, $num3);
?>