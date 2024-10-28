Desarrollar una función lógica llamada es_vocal() que determine si un carácter
recibido como parámetro es una letra vocal. <br>

<?php
    function es_vocal($caracter) {
        return in_array(strtolower($caracter), ["a", "e", "i", "o", "u"]);
    }

    $caracter = "a";
    echo es_vocal($caracter) ? "Verdadero" : "Falso";
    echo "¿$$caracter es una vocal? " . (es_vocal($caracter) ? "Sí" : "No");

    echo "<br>";

    $caracter = "b";
    echo "¿$$caracter es una vocal? " . (es_vocal($caracter) ? "Sí" : "No");
?>