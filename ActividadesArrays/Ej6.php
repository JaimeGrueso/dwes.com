Escribir un script PHP que genera un vector de 1000 números aleatorios entre 0 y
1000. Al final tiene que mostrar el elemento mayor, el menor y cuantas veces se
repiten cada uno.

<?php
    $vector = [];
    $rep_mayor = 0;
    $rep_menor = 0;

    for ($i = 0; $i < 1000; $i++) {
        $vector[$i] = rand(0, 1000);
    }

    $max_valor = max($vector);
    $min_valor = min($vector);

    foreach ($vector as $numero) {
        if ($numero == $max_valor) {
            $rep_mayor++;
        }
        elseif ($numero == $min_valor) {
            $rep_menor++;
        }
    }

    echo "<br>";
    echo "El número mayor es: $max_valor y se repite $rep_mayor veces.<br>";
    echo "El número menor es: $min_valor y se repite $rep_menor veces.<br>";

?>