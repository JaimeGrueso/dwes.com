23. Escribir un script PHP que gestiona un conjunto de artículos.
• Cada artículo tiene la siguiente estructura: Referencia (4 caracteres alfabéticos + 4
dígitos numéricos), descripción y PVP.
• La referencia actúa como clave.
• Mostrar el listado de artículos en formato tabla.
• Buscar el artículo más caro y el más barato. 

<?php
    $articulos = [
        "ABCD1234" => [
            "descripcion" => "Articulo 1",
            "pvp" => 100
        ],

        "EFGH5678" => [
            "descripcion" => "Articulo 2",
            "pvp" => 200
        ],

        "IJKL9101" => [
            "descripcion" => "Articulo 3",
            "pvp" => 300
        ]
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Referencia</th><th>Descripcion</th><th>PVP</th>";
    echo "</tr>";

    foreach ($articulos as $ref => $articulo) {
        echo "<tr>";
        echo "<td>$ref</td><td>".$articulo["descripcion"]."</td><td>".$articulo["pvp"]."</td>";
        echo "</tr>";
    }

    echo "</table>";

    $masCaro = "";
    $masBarato = "";

    foreach ($articulos as $ref => $articulo) {
        if ($masCaro == "" || $articulo["pvp"] > $articulos[$masCaro]["pvp"]) { // Si no hay articulo mas caro o el articulo actual es mas caro que el articulo mas caro encontrado hasta ahora
            $masCaro = $ref;
        }

        if ($masBarato == "" || $articulo["pvp"] < $articulos[$masBarato]["pvp"]) {
            $masBarato = $ref;
        }
    }

    echo "El articulo mas caro es $masCaro con un precio de ".$articulos[$masCaro]["pvp"]."<br>";
    echo "El articulo mas barato es $masBarato con un precio de ".$articulos[$masBarato]["pvp"];


?>