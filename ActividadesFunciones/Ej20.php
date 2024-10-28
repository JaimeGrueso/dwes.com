Desarrollar una función que tenga como parámetros el número del mes y devuelva
cuántos días tiene el mes. <br>

<?php
    function diasMes($mes) {
        switch ($mes) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                return 31;
            case 4: case 6: case 9: case 11:
                return 30;
            case 2:
                return 28;
            default:
                return "Mes no válido";
        }
    }

    $mes = 2;
    echo "El mes $mes tiene " . diasMes($mes) . " días.";

    $mes = 4;
    echo "<br>El mes $mes tiene " . diasMes($mes) . " días.";

    $mes = 7;
    echo "<br>El mes $mes tiene " . diasMes($mes) . " días.";
?>