Desarrollar una función que reciba como parámetros los lados de un triángulo
rectángulo y devuelva la hipotenusa.

<?php
    function hipotenusa($cateto1, $cateto2) {
        return sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    }

    $cateto1 = 3;
    $cateto2 = 4;
    echo "La hipotenusa de un triángulo rectángulo con catetos $cateto1 y $cateto2 es " . hipotenusa($cateto1, $cateto2);
?>