/*9. Crea un script PHP asigna a dos variables un número de horas extra trabajadas y el
salario por cada una. Luego, calcula y muestre en pantalla el salario con el símbolo
monetario.*/

<?php
// Asignar valores a las variables
$horas_extra = 10;      // Número de horas extra trabajadas
$salario_por_hora = 15; // Salario por hora extra en moneda

// Calcular el salario total por horas extra
$salario_total = $horas_extra * $salario_por_hora;

// Mostrar el salario total con símbolo monetario
print "El salario total por horas extra trabajadas es: " . number_format($salario_total, 2) . "€<br>";
?>
