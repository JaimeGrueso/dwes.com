Escribir un script PHP en genera las notas de 2 exámenes en tres trimestres.
Visualizar por pantalla la nota media, máxima y mínima de cada trimestre.

<?php
    // Inicializamos los trimestres y exámenes
    $trimestres = 3;
    $examenes = 2;
    $notas = [];
    
    // Rellenamos la matriz con las notas aleatorias entre 0 y 100
    for ($i = 0; $i < $trimestres; $i++) {
        for ($j = 0; $j < $examenes; $j++) {
            $notas[$i][$j] = rand(0, 100);
        }
    }
    
    // Calculamos y mostramos los resultados para cada trimestre
    for ($i = 0; $i < $trimestres; $i++) {
        $suma = 0;
        $minima = min($notas[$i]); // Nota mínima del trimestre
        $maxima = max($notas[$i]); // Nota máxima del trimestre
    
        // Sumamos las notas del trimestre para calcular la media
        for ($j = 0; $j < $examenes; $j++) {
            $suma += $notas[$i][$j];
        }
    
        $media = $suma / $examenes; // Calculamos la media del trimestre
    
        // Mostramos los resultados del trimestre
        echo "<h3>Trimestre " . ($i + 1) . "</h3>";
        echo "Notas: " . implode(", ", $notas[$i]) . "<br>";
        echo "Media: " . round($media, 2) . "<br>";
        echo "Nota máxima: $maxima<br>";
        echo "Nota mínima: $minima<br><br>";
    }    
?>