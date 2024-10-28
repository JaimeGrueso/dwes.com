Escribir un script PHP que rellena un vector con los nombres y las notas de 10
alumnos. Al final visualizará los nombres de los alumnos que tienen la nota más alta y
la más baja.

<?php
    $vector = array();
    $notas = array();
    $nombres = array();

    for ($i=0; $i < 10; $i++) { 
        $nombres[$i] = "Alumno" . ($i + 1);
        $notas[$i] = rand(0, 10);
    }

    $max = max($notas);
    $min = min($notas);

    echo "<br>";
    echo "Nombres y Notas:<br>";
    for ($i=0; $i < 10; $i++) {
        echo $nombres[$i] . ": " . $notas[$i] . " |";
    }
    
    echo "<br>";
    echo "Nota más alta: " . $max . "<br>";
    echo "Nota más baja: " . $min . "<br>";
    echo "Alumnos con nota más alta: ";

    for ($i=0; $i < 10; $i++) { 
        if ($notas[$i] == $max) {
            echo $nombres[$i] . " ";
        }
    }

    echo "<br>";
    echo "Alumnos con nota más baja: ";
    for ($i=0; $i < 10; $i++) { 
        if ($notas[$i] == $min) {
            echo $nombres[$i] . " ";
        }
    }
    echo "<br>";