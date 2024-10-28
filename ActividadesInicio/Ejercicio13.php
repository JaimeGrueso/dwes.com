/*13. Crea un script PHP que asigna a una variable un NIF sin la letra. Después calcula y
muestra la letra correspondiente a él.*/ <br>

<?php
    $nif = "07272274"; // Asignamos el NIF como una cadena de caracteres
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE"; // String de letras correspondientes a los NIFs
    $indice = intval($nif) % 23; // Convertimos el NIF a un entero para realizar el cálculo del índice
    $letra = $letras[$indice]; // Obtenemos la letra correspondiente
    echo "El NIF completo es: $nif$letra";
?>

