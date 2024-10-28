Desarrollar una función que devuelva la mediana de un conjunto de números
pasados como argumento.
<?php
function mediana($numeros) {
    sort($numeros); // Ordenamos el array de números
    $numElementos = count($numeros); // Contamos el número de elementos del array
    $mediana = 0; // Inicializamos la variable mediana a 0
    
    if ($numElementos % 2 == 0) { // Si el número de elementos del array es par
        $mediana = ($numeros[$numElementos / 2 - 1] + $numeros[$numElementos / 2]) / 2; // Calculamos la mediana
    } else { // Si el número de elementos del array es impar
        $mediana = $numeros[($numElementos - 1) / 2]; // Calculamos la mediana
    }
    
    return $mediana; // Devolvemos la mediana
}

// Llamada a la función con un ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
echo "La mediana de los números [1, 2, 3, 4, 5] es " . mediana($numeros);
?>