Desarrolla una función que calcule el área de un círculo y otra que calcule el volumen
de un cilindro utilizando la primera. <br>

<?php
    function areaCirculo($radio) {
        return M_PI * pow($radio, 2);
    }

    function volumenCilindro($radio, $altura) {
        return areaCirculo($radio) * $altura;
    }

    $radio = 5;
    $altura = 10;
    echo "El área de un círculo de radio $radio es " . areaCirculo($radio) . ".<br>";
    echo "El volumen de un cilindro de radio $radio y altura $altura es " . volumenCilindro($radio, $altura) . ".";
?>