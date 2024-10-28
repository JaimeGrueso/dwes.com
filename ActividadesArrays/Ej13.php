Escribir un script PHP que rellena aleatoriamente dos vectores de 500 elementos
numéricos enteros. Debe recorrerlos en sentido contrario cada uno de ellos y
contabilizar y mostrar en la consola cuantas coincidencias hay entre elementos de los
dos vectores, visualizando al final el total de coincidencias.

<?php
    $vector1 = array();
    $vector2 = array();
    $coincidencias = 0;

    for ($i=0; $i < 500; $i++) { 
        $vector1[$i] = rand(1, 100);
        $vector2[$i] = rand(1, 100);
    }
    
    for ($i=499; $i >= 0; $i--) { 
        if ($vector1[$i] == $vector2[$i]) {
            $coincidencias++;
        }
    }
    echo "<br>";
    echo "Coincidencias: $coincidencias";
?>