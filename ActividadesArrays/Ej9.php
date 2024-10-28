Escribir un script PHP que genera 10 números positivos menores que 100, los
almacene en un vector y busque el valor mayor y el menor, los visualice junto con su
posición en el vector.

<?php
// Inicializamos el vector
$vector = [];

// Generamos 10 números positivos aleatorios menores que 100
for ($i = 0; $i < 10; $i++) {
    $vector[$i] = rand(1, 99); // sea positivo y menor que 100
}

// Buscamos el valor mayor y menor y sus posiciones
$mayor = $vector[0];
$menor = $vector[0];
$posicionMayor = 0;
$posicionMenor = 0;

// Recorremos el vector para encontrar el mayor y menor
for ($i = 0; $i < count($vector); $i++) {
    if ($vector[$i] > $mayor) {
        $mayor = $vector[$i];
        $posicionMayor = $i; // Actualizamos la posición del mayor
    }
    if ($vector[$i] < $menor) {
        $menor = $vector[$i];
        $posicionMenor = $i; // Actualizamos la posición del menor
    }
}

// Mostramos los resultados
echo "<br>";
echo "Números generados: " . implode(", ", $vector) . "<br>";
echo "Número mayor: $mayor, en la posición: $posicionMayor<br>";
echo "Número menor: $menor, en la posición: $posicionMenor<br>";
?>
