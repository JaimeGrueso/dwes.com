/*3. Crea un script PHP que muestre en pantalla (utiliza un número float en notación
científica y elige una precisión diferente para ambos datos):
• La cantidad de bits en una memoria RAM de 16 GB.
• La población de la Tierra.
• El tamaño de algún virus (20 nm)*/

<?php
// Definir variables
$ram_gb = 16;                       // Memoria RAM en GB
$poblacion_tierra = 7.9e9;         // Población de la Tierra (aproximadamente 7.9 mil millones)
$tamano_virus_nm = 20;              // Tamaño de un virus en nanómetros

// Calcular la cantidad de bits en 16 GB
$ram_bits = $ram_gb * 1024 * 1024 * 1024 * 8; // Convertir GB a bits

// Mostrar valores con notación científica
print "Cantidad de bits en 16 GB de RAM: " . sprintf("%.2e", $ram_bits) . " bits<br>"; // Precisión 2
print "Población de la Tierra: " . sprintf("%.3e", $poblacion_tierra) . " personas<br>"; // Precisión 3
print "Tamaño de un virus: " . sprintf("%.1e", $tamano_virus_nm) . " nm<br>"; // Precisión 1
?>
