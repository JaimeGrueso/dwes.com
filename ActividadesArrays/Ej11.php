Escribir un script PHP que genera un vector de 10 elementos numéricos con un
método. Posteriormente generar otro vector con los cuadrados del primer vector.

<?php
    $vector = array();
    $vectorCuadrado = array();
    for ($i=0; $i < 10; $i++) { 
        $vector[$i] = rand(1, 10);
        $vectorCuadrado[$i] = $vector[$i] * $vector[$i];
    }
    echo "<br>";
    echo "Vector: " . implode(" ", $vector) . "<br>";
    echo "Vector cuadrado: " . implode(" ", $vectorCuadrado) . "<br>";
?>