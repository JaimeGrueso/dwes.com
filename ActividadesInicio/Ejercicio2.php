/*2. Crea un script PHP que declara tres variables de tipo entero y les asigna a cada una
el número 989 en decimal, octal, hexadecimal y binaria.*/

<?php
// Declarar la variable base decimal
$numero_decimal = 989;

// Conversión a octal (base 8)
$numero_octal = octdec(decoct($numero_decimal)); // Convertir de octal a decimal y viceversa

// Conversión a hexadecimal (base 16)
$numero_hexadecimal = hexdec(dechex($numero_decimal)); // Convertir de hexadecimal a decimal y viceversa

// Conversión a binario (base 2)
$numero_binario = bindec(decbin($numero_decimal)); // Convertir de binario a decimal y viceversa

// Mostrar los valores de las variables
print "Valor en Decimal: " . $numero_decimal . "<br>";         // 989
print "Valor en Octal: " . decoct($numero_octal) . "<br>";    // 01445
print "Valor en Hexadecimal: " . dechex($numero_hexadecimal) . "<br>"; // 3E5
print "Valor en Binario: " . decbin($numero_binario) . "<br>"; // 1111010101
?>

