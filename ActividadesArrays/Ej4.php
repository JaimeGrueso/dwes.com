/*4. Escribir un script PHP que genera una matriz simétrica de 10 filas por 10 columnas y
las visualice por pantalla. Una matriz es simétrica si el valor del elemento [i][j] es
igual al elemento [j][i]. */

<?php
    // Definimos las dimensiones de la matriz
    $dimensiones = 10;

    // Creamos la matriz
    $matriz = [];

    // Llenamos la matriz simétrica
    for ($i = 0; $i < $dimensiones; $i++) {
        for ($j = 0; $j < $dimensiones; $j++) {
            // Solo asignamos un valor si $j >= $i para evitar redundancia
            if ($j >= $i) {
                $valor = rand(0, 100); // Generamos un número aleatorio
                $matriz[$i][$j] = $valor; // Asignamos el valor a la posición [i][j]
                $matriz[$j][$i] = $valor; // Asignamos el mismo valor a la posición [j][i] para mantener la simetría
            }
        }
    }

    // Visualizamos la matriz con un formato de tabla
    echo "<br>";
    echo "+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+<br>";
    for ($i = 0; $i < $dimensiones; $i++) {
        echo "|";
        for ($j = 0; $j < $dimensiones; $j++) {
            echo str_pad($matriz[$i][$j], 5, " ", STR_PAD_BOTH) . "|"; // Espaciado con str_pad
        }
        echo "<br>";
        echo "+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+<br>"; // Línea divisoria
    }
?>
