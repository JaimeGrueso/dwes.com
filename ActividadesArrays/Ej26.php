26.Escribir un script PHP que realice gestiona un conjunto de pacientes en espera para
operarse.
• La información asociada a cada paciente es: Nº SS (clave), nombre completo,
operación, nivel de urgencia: A es el más alto y D el más bajo.
• Listar los pacientes en formato de tabla por niveles de urgencia.

<?php
    $pacientes = [
        "123456789" => [
            "nss" => "123456789",
            "nombre" => "Manolo",
            "operacion" => "Cirugia de corazon",
            "urgencia" => "A"
        ],

        "987654321" => [
            "nss" => "987654321",
            "nombre" => "Raul",
            "operacion" => "Cirugia de rodilla",
            "urgencia" => "B"
        ],

        "456789123" => [
            "nss" => "456789123",
            "nombre" => "Maria",
            "operacion" => "Cirugia de cadera",
            "urgencia" => "C"
        ],

        "321654987" => [
            "nss" => "321654987",
            "nombre" => "Laura",
            "operacion" => "Cirugia de estomago",
            "urgencia" => "D"
        ],

        "654987321" => [
            "nss" => "654987321",
            "nombre" => "Pedro",
            "operacion" => "Cirugia de higado",
            "urgencia" => "A"
        ],

        "789123456" => [
            "nss" => "789123456",
            "nombre" => "Juan",
            "operacion" => "Cirugia de pulmon",
            "urgencia" => "B"
        ],

        "654321987" => [
            "nss" => "654321987",
            "nombre" => "Ana",
            "operacion" => "Cirugia de riñon",
            "urgencia" => "C"
        ],
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Nº SS</th><th>Nombre</th><th>Operacion</th><th>Urgencia</th>";
    echo "</tr>";

    // Ordenar los pacientes por nivel de urgencia
    usort($pacientes, function($a, $b) {
        return strcmp($a["urgencia"], $b["urgencia"]);
    });

    foreach ($pacientes as $nss => $paciente) {
        echo "<tr>";
        echo "<td>".$paciente["nss"]."</td><td>".$paciente["nombre"]."</td><td>".$paciente["operacion"]."</td><td>".$paciente["urgencia"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

?>