Escribir un script PHP que rellena una matriz de 10 filas por 20 columnas con valores
aleatorios entre 1 y 100. Posteriormente generar un número aleatorio en ese rango y
buscarlo en la matriz generada. Tiene que visualizar la posición de la matriz en la que
se encuentre dicho número y si no lo encuentra emite un mensaje.

<?php
    $matriz = array();
    $numero = rand(1, 100);

    $encontrado = false;

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 20; $j++) { 
            $matriz[$i][$j] = rand(1, 100);
            if ($matriz[$i][$j] == $numero) {
                $encontrado = true;
                echo "<br>";
                echo "Número encontrado en la posición ($i, $j)<br>";
            }
        }
    }
    if (!$encontrado) {
        echo "<br>";
        echo "Número no encontrado en la matriz<br>";
    }