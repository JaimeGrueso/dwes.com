/*19. Crea un script PHP que asigna a una variable una cantidad de dinero en € y muestre
en pantalla su equivalente en $ y £.*/
<?php
$euros = 100; // Cantidad en euros
$tasa_dolar = 1.1; // Tasa de conversión a dólares (1 EUR = 1.1 USD)
$tasa_libra = 0.87; // Tasa de conversión a libras (1 EUR = 0.87 GBP)
$dolares = $euros * $tasa_dolar; // Convertir a dólares
$libras = $euros * $tasa_libra; // Convertir a libras
echo "$euros € equivalen a $dolares $ y $libras £.";
?>