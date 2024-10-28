/*17. Crea un script PHP que asigna a una variable una temperatura en ºC y muestre en
pantalla su equivalente en ºK y ºF.*/
<?php
$celsius = 25; // Temperatura en grados Celsius
$kelvin = $celsius + 273.15; // Conversión a Kelvin
$fahrenheit = ($celsius * 9/5) + 32; // Conversión a Fahrenheit
echo "$celsius ºC equivalen a $kelvin ºK y $fahrenheit ºF.";
?>
