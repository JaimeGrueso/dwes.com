ARRAYS ASOCIATIVOS

Escribir un script PHP que gestiona el inventario de una pequeña tienda.
    • Usa un array para almacenar el nombre de varios productos junto con la cantidad que tienes en stock de cada uno.
    • Muestra en pantalla cuántas unidades tienes de cada producto.
    • Simula que se vendieron 3 manzanas y 5 plátanos, actualizando las cantidades en el array.
    • Agrega un nuevo producto al inventario llamado "Naranjas" con una cantidad de 15 unidades.
    • Vuelve a mostrar el inventario actualizado en pantalla. <br>

<?php
$inventario = [
    "manzanas" => 10,
    "plátanos" => 20,
    "peras" => 15
];

foreach( $inventario as $producto => $cantidad ) {
    echo "Tienes $cantidad unidades de $producto<br>";
}
echo "<br>";

echo "<br>";

$inventario["manzanas"] -= 3;
$inventario["plátanos"] -= 5;

$inventario["naranjas"] = 15;

foreach( $inventario as $producto => $cantidad ) {
    echo "Ahora tienes $cantidad unidades de $producto<br>";
}
?>
