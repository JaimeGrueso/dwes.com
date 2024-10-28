Desarrollar una función llamada generar_n_caracteres() que tome un
número entero n y un caracter c. Debe devolver el caracter c repetido tantas veces
como indique el parámetro n. <br>

<?php
    function generar_n_caracteres($n, $c) {
        return str_repeat($c, $n);
    }

    $n = 5;
    $c = "a";

    echo "El caracter $c repetido $n veces es " . generar_n_caracteres($n, $c);
?>