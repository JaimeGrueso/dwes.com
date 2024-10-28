/*18. Crea un script PHP que asina a variables el número de muñecos y el número de
coches de juguete que hay en un paquete enviado por una agencia de transporte. Si
un muñeco pesa 4 onzas y un coche de juguete pesa 2 libras, ¿cuánto pesa el
paquete en Kg?*/

<?php
$munecos = 10; // Número de muñecos
$coches = 5;   // Número de coches
$peso_muneco = 4 / 35.274; // 4 onzas a kilogramos (1 onza = 0.0283495 kg)
$peso_coche = 2 / 2.205;   // 2 libras a kilogramos (1 libra = 0.453592 kg)
$peso_total = ($munecos * $peso_muneco) + ($coches * $peso_coche); // Peso total en kg
echo "El paquete pesa " . number_format($peso_total, 2) . " kg.";
?>
