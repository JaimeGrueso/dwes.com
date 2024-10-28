/*16. Crea un script PHP que asigna a variables dos números enteros y muestre en pantalla
<n> dividido por <m> dé como resultado un cociente de <c> y el resto es <r>, donde
<n> y <m> son los números introducidos, <c> es el cociente y <r> es el resto
respectivamente.*/
<?php
    $n = 17; // Primer número
    $m = 5;  // Segundo número
    $cociente = intdiv($n, $m); // Cociente de la división
    $resto = $n % $m; // Resto de la división
    echo "$n dividido por $m da como resultado un cociente de $cociente y el resto es $resto.";
?>
