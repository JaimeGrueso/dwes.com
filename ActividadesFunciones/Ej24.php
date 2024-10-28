24.Desarrollar una función llamada recortar(numero, minimo, maximo) que
reciba tres parámetros. El primero es el número a recortar, el segundo es el límite
inferior y el tercero es el límite superior. La función deberá cumplir con lo siguiente:
• Devolver el límite inferior si el número es menor que el límite inferior.
• Devolver el límite superior si el número es mayor que el límite superior.
• Devolver el número si no se excede ningún límite <br>

<?php
    function recortar($numeroRecortar, $limiteInferior, $limiteSuperior) {
        if ($numeroRecortar < $limiteInferior) {
            return $limiteInferior;
        } elseif ($numeroRecortar > $limiteSuperior) {
            return $limiteSuperior;
        } else {
            return $numeroRecortar;
        }
    }

    $numeroRecortar = 5;
    $limiteInferior = 0;
    $limiteSuperior = 10;

    echo "El número recortado es " . recortar($numeroRecortar, $limiteInferior, $limiteSuperior);

    $numeroRecortar = -5;
    $limiteInferior = 0;
    $limiteSuperior = 10;

    echo "<br>El número recortado es " . recortar($numeroRecortar, $limiteInferior, $limiteSuperior);

    $numeroRecortar = 15;
    $limiteInferior = 0;
    $limiteSuperior = 10;

    echo "<br>El número recortado es " . recortar($numeroRecortar, $limiteInferior, $limiteSuperior);
?>