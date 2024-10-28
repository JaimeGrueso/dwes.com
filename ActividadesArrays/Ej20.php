20.Escribir un script PHP para almacenar información sobre estudiantes y sus
calificaciones en diferentes asignaturas.
    • La clave del array es el nombre de un estudiante y el valor es otro array asociativo
    con las asignaturas y sus respectivas calificaciones.
    • Muestra las calificaciones de todos los estudiantes y asignaturas en un formato de tabla.
    • Calcula el promedio de las calificaciones de cada estudiante y muestra el resultado.
    • Simula que a uno de los estudiantes le subieron la nota en "Historia" en 1 punto y actualiza el array.
    • Agrega un nuevo estudiante llamado "Marta" con las siguientes calificaciones: "Matemáticas" => 10, "Historia" => 10.
    • Vuelve a mostrar el listado de estudiantes actualizado.
    • Lista los estudiantes que lo han aprobado todo

<?php
$estudiantes = [
    "Juan" => [
        "Matemáticas" => 5,
        "Historia" => 6,
        "Inglés" => 7
    ],
    "Ana" => [
        "Matemáticas" => 8,
        "Historia" => 7,
        "Inglés" => 9
    ],
    "Pedro" => [
        "Matemáticas" => 6,
        "Historia" => 5,
        "Inglés" => 6
    ]
];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<table>";
echo "<caption>Calificaciones de los estudiantes</caption>";
echo "<thead>";
echo "<tr><th>Estudiante</th><th>Matemáticas</th><th>Historia</th><th>Inglés</th><th>Promedio</th></tr>";
echo "</thead>";
echo "<tbody>";
foreach( $estudiantes as $nombre => $calificaciones ) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    $suma = 0;
    foreach( $calificaciones as $asignatura => $nota ) {
        echo "<td>$nota</td>";
        $suma += $nota;
    }
    $promedio = $suma / count($calificaciones);
    echo "<td>$promedio</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

echo "<br>";

$estudiantes["Juan"]["Historia"] += 1;

$estudiantes["Marta"] = [
    "Matemáticas" => 10,
    "Historia" => 10
];

echo "<table>";
echo "<caption>Calificaciones de los estudiantes</caption>";
echo "<thead>";
echo "<tr><th>Estudiante</th><th>Matemáticas</th><th>Historia</th><th>Inglés</th><th>Promedio</th></tr>";
echo "</thead>";
echo "<tbody>";
foreach( $estudiantes as $nombre => $calificaciones ) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    $suma = 0;
    foreach( $calificaciones as $asignatura => $nota ) {
        echo "<td>$nota</td>";
        $suma += $nota;
    }
    $promedio = $suma / count($calificaciones);
    echo "<td>$promedio</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

echo "<br>";

echo "<h2>Estudiantes que han aprobado todo</h2>";
foreach( $estudiantes as $nombre => $calificaciones ) {
    $aprobado = true;
    foreach( $calificaciones as $asignatura => $nota ) {
        if( $nota < 5 ) {
            $aprobado = false;
            break;
        }
    }
    if( $aprobado ) {
        echo "$nombre ha aprobado todo<br>";
    }
}

?>


