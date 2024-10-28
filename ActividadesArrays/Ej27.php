27. Escribir un script PHP para gestionar un conjunto de sitios web.
• Cada uno contiene la siguiente información: URL (clave), título, fecha inicio, n.º de visitas
• Añadir un método que visualice los sitios que han superado un número de visitas concreto. 

<?php
    $sitios = [
        "https://www.google.com" => [
            "url" => "https://www.google.com",
            "titulo" => "Google",
            "fechaInicio" => "1998-09-04",
            "visitas" => 1000000000
        ],

        "https://www.youtube.com" => [
            "url" => "https://www.youtube.com",
            "titulo" => "Youtube",
            "fechaInicio" => "2005-02-14",
            "visitas" => 2000000000
        ],

        "https://www.facebook.com" => [
            "url" => "https://www.facebook.com",
            "titulo" => "Facebook",
            "fechaInicio" => "2004-02-04",
            "visitas" => 1500000000
        ]
    ];
        
    /* Añadir un método que visualice los sitios que han superado un número de visitas concreto. */
    function mostrarSitios($sitios, $visitas) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>";
        echo "<th>URL</th><th>Titulo</th><th>Fecha Inicio</th><th>Visitas</th>";
        echo "</tr>";

        foreach ($sitios as $url => $sitio) {
            if ($sitio["visitas"] > $visitas) {
                echo "<tr>";
                echo "<td>$url</td><td>".$sitio["titulo"]."</td><td>".$sitio["fechaInicio"]."</td><td>".$sitio["visitas"]."</td>";
                echo "</tr>";
            }
        }

        echo "</table>";
    }

    // Llamada a la función con un ejemplo de uso
    mostrarSitios($sitios, 30000000);



?>