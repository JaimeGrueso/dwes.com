Desarrolla una función que reciba como parámetros el radio de una circunferencia,
luego muestre el área del círculo y finalmente devuelva la longitud de la
circunferencia. <br>

<?php
    function circunferencia($radio) {
        $area = M_PI * pow($radio, 2);
        $longitud = 2 * M_PI * $radio;
        echo "El área del círculo es " . $area . "<br>";
        return $longitud;
    }

    $radio = 5;
    echo "La longitud de la circunferencia es " . circunferencia($radio);
?>