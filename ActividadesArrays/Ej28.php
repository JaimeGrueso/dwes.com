28.Escribir un script PHP para gestionar una colección de atletas olímpicos en unos
juegos olímpicos.
• Cada componente tiene: dorsal (clave), nacionalidad (acrónimo de tres caracteres), nombre, prueba atlética.
• Listar en formato tabla la lista de atletas por nacionalidades.

<?php
    $atletas = [
        "001" => [
            "dorsal" => "001",
            "nacionalidad" => "ESP",
            "nombre" => "Rafael Nadal",
            "prueba" => "Tenis"
        ],

        "002" => [
            "dorsal" => "002",
            "nacionalidad" => "ESP",
            "nombre" => "Mireia Belmonte",
            "prueba" => "Natación"
        ],

        "003" => [
            "dorsal" => "003",
            "nacionalidad" => "USA",
            "nombre" => "Michael Phelps",
            "prueba" => "Natación"
        ],

        "004" => [
            "dorsal" => "004",
            "nacionalidad" => "USA",
            "nombre" => "Simone Biles",
            "prueba" => "Gimnasia"
        ],

        "005" => [
            "dorsal" => "005",
            "nacionalidad" => "CHN",
            "nombre" => "Yao Ming",
            "prueba" => "Baloncesto"
        ],

        "006" => [
            "dorsal" => "006",
            "nacionalidad" => "CHN",
            "nombre" => "Liu Xiang",
            "prueba" => "Atletismo"
        ],

        "007" => [
            "dorsal" => "007",
            "nacionalidad" => "JPN",
            "nombre" => "Kohei Uchimura",
            "prueba" => "Gimnasia"
        ]
    ];
        
    /* Listar en formato tabla la lista de atletas por nacionalidades. */
    function listarAtletasPorNacionalidades($atletas) {
        $nacionalidades = [];
        foreach ($atletas as $atleta) {
            $nacionalidades[$atleta["nacionalidad"]][] = $atleta;
        }

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nacionalidad</th><th>Nombre</th><th>Prueba</th>";
        echo "</tr>";

        foreach ($nacionalidades as $nacionalidad => $atletas) {
            echo "<tr>";
            echo "<td rowspan='".count($atletas)."'>$nacionalidad</td>";
            foreach ($atletas as $atleta) {
                echo "<td>".$atleta["nombre"]."</td><td>".$atleta["prueba"]."</td>";
                echo "</tr>";
            }
        }

        echo "</table>";
    }

    // Llamada a la función con un ejemplo de uso
    listarAtletasPorNacionalidades($atletas);


?>