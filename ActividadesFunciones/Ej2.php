Desarrollar una función que tenga un parámetro entero y devuelva la letra P si el
número es positivo, O si el número es cero o N si el número es negativo. <br>

<?php
    function positivoCeroNegativo($numero) {
        if ($numero > 0) {
            return "P";
        } elseif ($numero == 0) {
            return "0";
        } else {
            return "N";
        }
    }

    echo "¿Que clase de numero es? " . (positivoCeroNegativo(5) == "P" ? "Positivo" : (positivoCeroNegativo(5) == "0" ? "Cero" : "Negativo"));
    echo "<br>";
    echo "¿Que clase de numero es? " . (positivoCeroNegativo(0) == "P" ? "Positivo" : (positivoCeroNegativo(0) == "0" ? "Cero" : "Negativo"));
    echo "<br>";
    echo "¿Que clase de numero es? " . (positivoCeroNegativo(-7) == "P" ? "Positivo" : (positivoCeroNegativo(-7) == "0" ? "Cero" : "Negativo"));
?>