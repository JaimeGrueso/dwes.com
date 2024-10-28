Escribir un script PHP que rellena con números aleatorios una matriz de 20 filas por
50 columnas y rellene un vector de 50 elementos con la suma de las 50 columnas. Al
final debe visualizar este vector.

<?php
    $filas = 20;
    $columnas = 50;

    $matriz = [];

    $vector = [];

    for ($i=0; $i < $filas; $i++) { 
        $matriz[$i] = [];
        for ($j=0; $j < $columnas; $j++) { 
            $matriz[$i][$j] = rand(0,100);
        }
    }

    for ($j = 0; $j < $columnas; $j++) {
        $sumaColumna = 0;
        for ($i = 0; $i < $filas; $i++) {
            $sumaColumna += $matriz[$i][$j];
        }
        $vector[] = $sumaColumna;
    }
    
    echo "Vector con la suma de cada columna:<br>";

    foreach ($vector as $indice => $suma) {
        echo "Columna $indice: $suma<br>";
    }
?>