/*8. Crea un script PHP que declare las variables a, b y c con valores 3.5, 6 y 4.25
respectivamente. Luego calcule y muestre en pantalla la siguiente operación
aritmética:*/ <br>

<?php
// Declarar las variables
$a = 3.5;  // Valor de a
$b = 6;    // Valor de b
$c = 4.25; // Valor de c

// Calcular la operación aritmética
$resultado = ((($a + 2) / (2 * $b)) * (pow((($c - 4) / ($a / $c)), 2)));

// Mostrar el resultado
print "El resultado de la operación es: " . $resultado;
?>
