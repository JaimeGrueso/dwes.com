Desarrolla una función que calcule el área de un triángulo. Para ello, recibe como
parámetros la base y la altura del triángulo. Finalmente, devuelve el área calculada. <br>

<?php
    function araeaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    $base = 5;
    $altura = 10;
    echo "El área de un triángulo de base $base y altura $altura es " . araeaTriangulo($base, $altura) . ".";
?>