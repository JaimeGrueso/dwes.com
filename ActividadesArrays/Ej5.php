/*Escribir un script PHP que rellene un vector de 100 números enteros aleatorios entre -
100 y 100. Posteriormente visualice cuantos son negativos, cuantos positivos, cuantos
son pares y cuantos son impares.*/

<?php
    $vector = [];
    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;

    for ($i = 0; $i < 100; $i++) {
        $vector[$i] = rand(-100, 100);

        // Contar negativos y positivos
        if ($vector[$i] < 0) {
            $negativos++;
        } elseif ($vector[$i] > 0) {
            $positivos++;
        }

        // Contar pares e impares
        if ($vector[$i] % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "<br>";
    echo "Cantidad de números negativos: $negativos<br>";
    echo "Cantidad de números positivos: $positivos<br>";
    echo "Cantidad de números pares: $pares<br>";
    echo "Cantidad de números impares: $impares<br>";
?>
