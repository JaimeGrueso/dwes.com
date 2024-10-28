Desarrolla una función que convierta un número decimal en binario. <br>

<?php
    function decimalABinario($numero) {
        return decbin($numero);
    }

    $numero = 10;
    echo "El número decimal $numero en binario es " . decimalABinario($numero) . ".";
?>