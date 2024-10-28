Desarrollar una función lógica llamada es_digito() que determine si un carácter
recibido como parámetro es un dígito numérico. <br>

<?php
    function es_digito($carcater) {
        return is_numeric($carcater);
    }

    $caracter = "a";
    echo "¿$$caracter es un digito? " . (es_digito($caracter) ? "Sí" : "No");

    echo "<br>";

    $caracter = "1";
    echo "¿$$caracter es un digito? " . (es_digito($caracter) ? "Sí" : "No");
?>