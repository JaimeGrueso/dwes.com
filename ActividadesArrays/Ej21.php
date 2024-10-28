Escribir un script PHP para crear una agenda telefónica simple que almacena y
muestra números de contacto.
• La clave del array son los nombres de personas y los valores son un nuevo array
con su número de teléfono y su dirección de email.
• Muestra todos los contactos de la agenda, mostrando el nombre, el número de
teléfono y el email en un formato de tabla.
• Simula que el número de "Juan" ha cambiado y actualiza su número en el array.
• Añade un nuevo contacto llamado "Laura" con el número "741852963".
• Busca si el contacto "Pedro" está en la agenda y, si existe, muestra su número de
teléfono y email. Si no, muestra un mensaje indicando que no se encontró el contacto.
• Muestra la agenda completa actualizada, también en formato tabla.

<?php
$agenda = [
    "Juan" => [
        "telefono" => "123456789",
        "email" => "gruesomartinjaime@gmail.com"
    ],
    "Ana" => [
        "telefono" => "987654321",
        "email" => "estoesunaruina@gmail.com"
    ],
    "Pedro" => [
        "telefono" => "123123123",
        "email" => "mecagoenmiestampa@gmail.com"
    ]
];

echo "<br>";

echo "<table>";
echo "<caption>Agenda de contactos</caption>";
echo "<thead>";
echo "<tr><th>Nombre</th><th>Teléfono</th><th>Email</th></tr>";
echo "</thead>";
echo "<tbody>";
foreach( $agenda as $nombre => $contacto ) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>{$contacto['telefono']}</td>";
    echo "<td>{$contacto['email']}</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

echo "<br>";

$agenda["Juan"]["telefono"] = "987654321";

$agenda["Laura"] = [
    "telefono" => "741852963",
    "email" => "mamahuevo@gmail.com"
];

if( array_key_exists("Pedro", $agenda) ) {
    echo "El teléfono de Pedro es {$agenda['Pedro']['telefono']} y su email es {$agenda['Pedro']['email']}";
}
else {
    echo "No se encontró el contacto Pedro";
}

echo "<br>";

echo "<table>";
echo "<caption>Agenda de contactos actualizada</caption>";
echo "<thead>";
echo "<tr><th>Nombre</th><th>Teléfono</th><th>Email</th></tr>";
echo "</thead>";
echo "<tbody>";
foreach( $agenda as $nombre => $contacto ) {
    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>{$contacto['telefono']}</td>";
    echo "<td>{$contacto['email']}</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>