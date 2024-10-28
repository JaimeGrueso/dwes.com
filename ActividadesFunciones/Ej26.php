Desarrollar una función que recibe un número entero y luego, calcule y muestre ese
número en varios sistemas de numeración (octal, hexadecimal y binario). <br>

<?php
    function sistemasNumeracion($n) {
        echo "El numero $n en octal es " . decoct($n) . "<br>";
        echo "El numero $n en hexadecimal es " . strtoupper(dechex($n)) . "<br>";
        echo "El numero $n en binario es " . decbin($n) . "<br>";
    }

    $n = 8;
    sistemasNumeracion($n);
?>