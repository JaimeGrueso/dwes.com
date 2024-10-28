Desarrollar una función que devuelva el valor máximo y el valor mínimo de un
conjunto de números pasados como parámetros

<?php
    function maxMin($numeros) {
        $max = $numeros[0];
        $min = $numeros[0];

        foreach ($numeros as $numero) {
            if ($numero > $max) {
                $max = $numero;
            }

            if ($numero < $min) {
                $min = $numero;
            }
        }
        // devuelve un array porque no se puede devolver dos valores a la vez
        return [$max, $min];
    }

    $numeros = [10, 20, 30, 40, 50];

    $resultados = maxMin($numeros);

    // Se pone el 0 y el 1 porque el array devuelto por la función tiene dos elementos
    echo "El número máximo es " . $resultados[0] . " y el número mínimo es " . $resultados[1] . ".";
?>