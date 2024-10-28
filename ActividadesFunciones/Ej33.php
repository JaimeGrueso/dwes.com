Desarrollar una función que tenga un parámetro de coma flotante y uno entero. La
función debe devolver el número de coma flotante redondeado a los dígitos
decimales del segundo parámetro establecido.

<?php
    function redondear($numero, $decimales) {
        return round($numero, $decimales);
    }

    $numero = 3.14159;
    $decimales = 2;

    echo "El número redondeado a $decimales decimales es: " . redondear($numero, $decimales);
?>