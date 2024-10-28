Desarrollar una función que tenga como parámetros el año y devuelva si el año es
bisiesto. <br>


<?php
    function esBisiesto($anio) {
        // Un año es bisiesto si es divisible por 4 y no es divisible por 100 o si es divisible por 400 directamente
        return ($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0;
    }

    $anio = 2020;
    echo "El año $anio " . (esBisiesto($anio) ? "es" : "no es") . " bisiesto.";

    $anio = 2021;
    echo "<br>El año $anio " . (esBisiesto($anio) ? "es" : "no es") . " bisiesto.";
?>