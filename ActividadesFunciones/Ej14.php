Desarrollar una función que calcule el total del ticket con IVA incluido. Recibe el
importe del ticket y el porcentaje de IVA. Luego calcula y devuelve el total del ticket.
Si no se pasa el parámetro IVA, su valor por defecto es 21%. <br>

<?php
    function totalTicket($importe, $iva = 21) {
        return $importe + $importe * $iva / 100;
    }

    $importe = 100;
    echo "El total del ticket con un importe de $importe es " . totalTicket($importe) . "€.";

    $importe = 100;
    $iva = 10;
    echo "<br>El total del ticket con un importe de $importe y un IVA de $iva" . "%" . " es " . totalTicket($importe, $iva) . "€.";
?>