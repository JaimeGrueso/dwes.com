/*10. Crea un script PHP que asigna a una variable un número entero positivo y luego
muestre la suma de números enteros desde 1 al número ingresado. Esta suma se
puede calcular con la siguiente expresión:*/ <br>

<?php
// Asignar un número entero positivo a una variable
$n = 10; // Puedes cambiar este valor a cualquier número entero positivo

// Calcular la suma de los números enteros desde 1 hasta n
$suma = ($n * ($n + 1)) / 2;

// Mostrar el resultado
print "La suma de los números enteros desde 1 hasta $n es: $suma";
?>
