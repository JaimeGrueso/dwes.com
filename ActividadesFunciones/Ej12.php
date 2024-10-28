Desarrolla una función que convierta un número binario en decimal. <br>

<?php
    function binarioADecimal($numero) {
        return bindec($numero);
    }

    $numero = 1010;
    echo "El número binario $numero en decimal es " . binarioADecimal($numero) . ".";
?>
