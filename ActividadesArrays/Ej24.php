24. Escribir un script PHP para gestionar un conjunto de vehículos de 2ª mano en un
concesionario donde la matrícula es la clave.
• La información de cada vehículo es: matrícula (4 dígitos numéricos + 3 letras),
marca, modelo, PVP.
• Listar los vehículos en formato tabla.
• Listar los vehículos de la marca Audi.

<?php
    $vehiculos = [
        "1234ABC" => [
            "marca" => "Audi",
            "modelo" => "A3",
            "pvp" => 10000
        ],

        "5678DEF" => [
            "marca" => "Audi",
            "modelo" => "A4",
            "pvp" => 20000
        ],

        "9101GHI" => [
            "marca" => "BMW",
            "modelo" => "Serie 3",
            "pvp" => 30000
        ]
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Matricula</th><th>Marca</th><th>Modelo</th><th>PVP</th>";
    echo "</tr>";

    foreach ($vehiculos as $matricula => $vehiculo) {
        echo "<tr>";
        echo "<td>$matricula</td><td>".$vehiculo["marca"]."</td><td>".$vehiculo["modelo"]."</td><td>".$vehiculo["pvp"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<br>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Matricula</th><th>Marca</th><th>Modelo</th><th>PVP</th>";
    echo "</tr>";

    foreach ($vehiculos as $matricula => $vehiculo) {
        if ($vehiculo["marca"] == "Audi") {
            echo "<tr>";
            echo "<td>$matricula</td><td>".$vehiculo["marca"]."</td><td>".$vehiculo["modelo"]."</td><td>".$vehiculo["pvp"]."</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
?>