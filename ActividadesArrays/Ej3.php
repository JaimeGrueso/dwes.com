/*Escribir un script PHP que genera una matriz de 15 filas y 10 columnas de números
enteros aleatorios y visualizar al final la suma de los elementos de cada fila.*/
<?php
    // Definimos las dimensiones de la matriz
    $filas = 15;
    $columnas = 10;
    
    // Creamos la matriz
    $matriz = [];
    
    // Llenamos la matriz con números aleatorios
    for ($i = 0; $i < $filas; $i++) {
        $matriz[$i] = [];  // Inicializamos la fila
        for ($j = 0; $j < $columnas; $j++) {
            // Generamos un número aleatorio entre 0 y 100 (puedes cambiar el rango si lo deseas)
            $matriz[$i][$j] = rand(0, 100);
        }
    }

    /*
    // Visualizamos la matriz y calculamos la suma de cada fila
    echo "<table border='1'>";  // Iniciamos una tabla HTML
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";  // Iniciamos una fila en la tabla
        $sumaFila = 0;  // Inicializamos la suma de la fila
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";  // Mostramos cada elemento de la fila
            $sumaFila += $matriz[$i][$j];  // Sumamos el elemento a la suma de la fila
        }
        echo "<td><strong>Suma: $sumaFila</strong></td>";  // Mostramos la suma de la fila
        echo "</tr>";  // Cerramos la fila en la tabla
    }
    echo "</table>";  // Cerramos la tabla HTML  */
    
    // Visualizamos la matriz y calculamos la suma de cada fila
    for ($i = 0; $i < $filas; $i++) {
        $sumaFila = 0;  // Inicializamos la suma de la fila
    
    // Imprimimos los elementos de la fila
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j] . " ";  // Mostramos cada elemento de la fila
        $sumaFila += $matriz[$i][$j];  // Sumamos el elemento a la suma de la fila
    }
    
    // Mostramos la suma de la fila
    echo " | Suma: $sumaFila<br>";  // Resultado: Suma de la fila
}
?>