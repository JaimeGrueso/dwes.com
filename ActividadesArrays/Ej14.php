Escribir un script PHP que genera las notas de 4 asignaturas y 3 exámenes por cada
asignatura. Visualizar por pantalla la media de las notas suspensas por asignatura.

<?php
    $notas = array();
    $media = 0;
    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            $notas[$i][$j] = rand(0, 10);
            if ($notas[$i][$j] < 5) {
                $media += $notas[$i][$j];
            }
        }
        $media = round($media / 3, 2);
        echo "<br>";
        echo "Media de las notas suspensas de la asignatura " . ($i + 1) . ": $media<br>";
        $media = 0; // Se reinicia para la siguiente asignatura
    }
?>