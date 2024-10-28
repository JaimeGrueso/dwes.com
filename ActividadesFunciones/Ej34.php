Desarrollar una función que recibe una hora en formato hh:mm:ss y devuelva un
valor indicando si el formato es correcto. 

<?php
    function formatoHora($hora) {
        $formatoCorrecto = false;
        $hora = explode(":", $hora);
        if (count($hora) == 3) {
            if (is_numeric($hora[0]) && is_numeric($hora[1]) && is_numeric($hora[2])) {
                if ($hora[0] >= 0 && $hora[0] <= 23 && $hora[1] >= 0 && $hora[1] <= 59 && $hora[2] >= 0 && $hora[2] <= 59) {
                    $formatoCorrecto = true;
                }
            }
        }
        return $formatoCorrecto;
    }

    $hora = "23:59:59";

    if (formatoHora($hora)) {
        echo "El formato de la hora " . $hora . " es correcto.";
    } else {
        echo "El formato de la hora " . $hora . " es incorrecto.";
    }
?>