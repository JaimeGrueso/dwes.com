/*Escribir un script PHP que genera un vector con las notas de 10 alumnos y al final
tiene que mostrar por pantalla cuantos han suspendido, cuantos han aprobado y la
nota media.*/
<?php
    $notas = [];
    for ($i=0; $i < 10; $i++) { 
        $notas[] = rand(1, 10);
    }

    // Inicializar contadores
    $suspendidos = 0;
    $aprobados = 0;
    $sumaNotas = 0;

    // Recorrer el array de notas
    foreach ($notas as $nota) {
        // Sumar la nota al total
        $sumaNotas += $nota;

    // Contar aprobados y suspendidos (suponiendo que 5 o más es aprobado)
    if ($nota >= 5) {
        $aprobados++;
    } else {
        $suspendidos++;
    }
}

    // Calcular la nota media
    $notaMedia = $sumaNotas / count($notas);

    // Pasar de Array a Cadena
    $cadena = "";  // Inicializamos la cadena vacía

    // Recorrer el array
    for ($i = 0; $i < count($notas); $i++) {
        $cadena .= $notas[$i];  // Concatenamos el valor actual

    // Añadimos una coma si no es el último elemento
    if ($i < count($notas) - 1) {
        $cadena .= ", ";
    }
}

    // Mostrar resultados
    echo "<br>";
    echo "Notas de los alumnos: " . $cadena . "<br>"; // Se podria hacer con implode(", ", $notas)
    echo "Cantidad de aprobados: $aprobados<br>";
    echo "Cantidad de suspendidos: $suspendidos<br>";
    echo "Nota media: " . $notaMedia . "<br>";

?>