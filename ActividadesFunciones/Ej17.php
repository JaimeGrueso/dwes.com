Desarrollar una función que emule al operador lógico XOR. Para ello, recibe dos
parámetros lógicos y devuelve el resultado. <br>

<?php
    function xorLogico($valor1, $valor2) { 
        // Devuelve true si uno de los dos valores es true y el otro false y false en cualquier otro caso
        return ($valor1 || $valor2) && !($valor1 && $valor2);
    }

    $valor1 = true;
    $valor2 = true;
    echo "El resultado de aplicar el operador lógico XOR a $valor1 y $valor2 es " . (xorLogico($valor1, $valor2) ? "true" : "false") . "<br>";

    $valor1 = true;
    $valor2 = false;
    echo "El resultado de aplicar el operador lógico XOR a $valor1 y $valor2 es " . (xorLogico($valor1, $valor2) ? "true" : "false") . "<br>";

    $valor1 = false;
    $valor2 = true;
    echo "El resultado de aplicar el operador lógico XOR a $valor1 y $valor2 es " . (xorLogico($valor1, $valor2) ? "true" : "false") . "<br>";

    $valor1 = false;
    $valor2 = false;
    echo "El resultado de aplicar el operador lógico XOR a $valor1 y $valor2 es " . (xorLogico($valor1, $valor2) ? "true" : "false") . "<br>";
?>