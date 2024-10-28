Desarrollar una función que calcule el promedio de un conjunto de números pasados 
como parámetros.<br>

<?php
    function promedio($numeros) {
        $suma = 0;
        
        foreach ($numeros as $numero) {
            $suma += $numero;
        }
        
        return $suma / count($numeros);
    }

    $numeros = [10, 20, 30, 40, 50];

    echo "El promedio de los números es de " . promedio($numeros) . ".";
?>