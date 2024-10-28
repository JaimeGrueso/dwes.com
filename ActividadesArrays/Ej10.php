Escribir un script PHP que visualice por pantalla todos los números primos que hay
menores que 1000.
<?php
// Inicializamos un array para almacenar los números primos
$numerosPrimos = [];

// Recorremos todos los números desde 2 hasta 999
for ($num = 2; $num < 1000; $num++) {
    $esPrimo = true; // Suponemos que el número es primo

    // Verificamos si el número es primo
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $esPrimo = false; // Si es divisible, no es primo
            break; // Salimos del bucle si encontramos un divisor
        }
    }

    // Si el número es primo, lo almacenamos en el array
    if ($esPrimo) {
        $numerosPrimos[] = $num; // Agregamos el número primo al array
    }
}

// Visualizamos todos los números primos menores que 1000
echo "<br>";
echo "Números primos menores que 1000:<br>";
foreach ($numerosPrimos as $primo) {
    echo $primo . " "; // Mostramos cada número primo
}
?>
