25.Escribir un script PHP para gestionar un conjunto de archivos en un soporte de
almacenamiento.
• Cada archivo tiene la siguiente información: nombre, path, tamaño (en bytes) y atributos
• El nombre es la clave.
• Listar los archivos en formato tabla con el tamaño en la mayor unidad de medida posible. 

<?php
    $archivos = [
        "archivo1.txt" => [
            "path" => "/home/usuario/archivo1.txt",
            "tamaño" => 1000,
            "atributos" => "rwxr-xr-x"
        ],

        "archivo2.txt" => [
            "path" => "/home/usuario/archivo2.txt",
            "tamaño" => 2000,
            "atributos" => "rwxr-xr-x"
        ],

        "archivo3.txt" => [
            "path" => "/home/usuario/archivo3.txt",
            "tamaño" => 3000,
            "atributos" => "rwxr-xr-x"
        ]
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th><th>Path</th><th>Tamaño</th><th>Atributos</th>";
    echo "</tr>";

    foreach ($archivos as $nombre => $archivo) {
        $tamaño = $archivo["tamaño"];
        $unidad = "B";

        if ($tamaño >= 1024) {
            $tamaño /= 1024;
            $unidad = "KB";
        }

        if ($tamaño >= 1024) {
            $tamaño /= 1024;
            $unidad = "MB";
        }

        if ($tamaño >= 1024) {
            $tamaño /= 1024;
            $unidad = "GB";
        }

        echo "<tr>";
        echo "<td>$nombre</td><td>".$archivo["path"]."</td><td>".$tamaño." ".$unidad."</td><td>".$archivo["atributos"]."</td>";
        echo "</tr>";
    }

    echo "</table>";