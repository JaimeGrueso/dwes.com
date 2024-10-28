Desarrollar una función llamada intermedio(a, b) que devuelva el punto
intermedio entre los dos números <br>

<?php
    function intermedio($a, $b) {
        return ($a + $b) / 2;
    }

    $a = 5;
    $b = 10;

    echo "El punto intermedio entre $a y $b es " . intermedio($a, $b);
?>