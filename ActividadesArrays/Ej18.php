Escribir un script PHP que rellene un array de 10 elementos con números enteros
aleatorios. Posteriormente visualizar los números en orden ascendente y luego
descendente.

<?php
    $array = array();

    for ($i=0; $i < 10; $i++) { 
        $array[$i] = rand(1, 100);
    }
    
    echo "<br>";
    echo "Array: " . implode(" ", $array) . "<br>";
    sort($array);

    echo "Array ascendente: " . implode(" ", $array) . "<br>";
    rsort($array);
    echo "Array descendente: " . implode(" ", $array) . "<br>";
?>