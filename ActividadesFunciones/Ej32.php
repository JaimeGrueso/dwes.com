Desarrollar una función que calcule el MCM de dos números. Aquí tienes la fórmula:
MCM(a, b) = (a * b) / MCD(a, b).

<?php
    // Define la función mcd que calcula el Máximo Común Divisor (MCD) de dos números
    function mcd($a, $b) {
        // Mientras el segundo número (b) no sea 0
        while ($b != 0) {
            // Almacena el valor de b en una variable temporal t
            $t = $b;
            // Asigna a b el valor del residuo de a dividido por b
            $b = $a % $b;
            // Asigna a a el valor de t (el valor original de b)
            $a = $t;
        }
        
        // Cuando b es 0, a contiene el MCD, así que se devuelve a
        return $a;
    }

    // Define la función mcm que calcula el Mínimo Común Múltiplo (MCM) de dos números
    function mcm($a, $b) {
        // Calcula el MCM con la fórmula (a * b) / MCD(a, b)
        return ($a * $b) / mcd($a, $b);
    }

    // Define dos variables a y b con los valores 24 y 36 respectivamente
    $a = 24;
    $b = 36;

    // Llama a la función mcm con los valores de a y b, y muestra el resultado
    echo "El MCM de $a y $b es " . mcm($a, $b) . ".";