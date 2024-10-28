30. Escribir un script PHP para gestionar una lista de mensajes de correo en la bandeja
de entrada.
• Cada mensaje contiene la siguiente información: Fecha y hora de entrada,
remitente (usuario@dominio.tld), asunto, texto del mensaje.
• Listar los mensajes ordenados por la fecha del mensaje en formato de tabla.
• Listar la lista de mensajes de un remitente concreto. 

<?php
    $mensajes = [
        "001" => [
            "fecha" => "2021-01-01 10:00:00",
            "remitente" => "usuario1@dominio.tld",
            "asunto" => "Asunto 1",
            "texto" => "Texto del mensaje 1"
        ],

        "002" => [
            "fecha" => "2021-01-02 11:00:00",
            "remitente" => "usuario2@dominio.tld",
            "asunto" => "Asunto 2",
            "texto" => "Texto del mensaje 2"
        ],

        "003" => [
            "fecha" => "2021-01-03 12:00:00",
            "remitente" => "usuario3@dominio.tld",
            "asunto" => "Asunto 3",
            "texto" => "Texto del mensaje 3"
        ],

        "004" => [
            "fecha" => "2021-01-04 13:00:00",
            "remitente" => "usuario4@dominio.tld",
            "asunto" => "Asunto 4",
            "texto" => "Texto del mensaje 4"
        ],

        "005" => [
            "fecha" => "2021-01-05 14:00:00",
            "remitente" => "usuario1@dominio.tld",
            "asunto" => "Asunto 5",
            "texto" => "Texto del mensaje 5"
        ]
    ];
    
    /* Listar los mensajes ordenados por la fecha del mensaje en formato de tabla. */
    function listarMensajes($mensajes) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>";
        echo "<th>Fecha</th><th>Remitente</th><th>Asunto</th><th>Texto</th>";
        echo "</tr>";

        $mensajesOrdenados = $mensajes;
        usort($mensajesOrdenados, function($a, $b) {
            return strtotime($a["fecha"]) - strtotime($b["fecha"]);
        });

        foreach ($mensajesOrdenados as $mensaje) {
            echo "<tr>";
            echo "<td>".$mensaje["fecha"]."</td><td>".$mensaje["remitente"]."</td><td>".$mensaje["asunto"]."</td><td>".$mensaje["texto"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    echo "<br>";

    /* Listar la lista de mensajes de un remitente concreto. */
    function listarMensajesRemitente($mensajes, $remitente) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>";
        echo "<th>Fecha</th><th>Remitente</th><th>Asunto</th><th>Texto</th>";
        echo "</tr>";

        $hayMensajes = false;
        foreach ($mensajes as $mensaje) {
            if ($mensaje["remitente"] == $remitente) {
                echo "<tr>";
                echo "<td>".$mensaje["fecha"]."</td><td>".$mensaje["remitente"]."</td><td>".$mensaje["asunto"]."</td><td>".$mensaje["texto"]."</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }

    
    // Llamada a la función con un ejemplo de uso
    listarMensajes($mensajes);

    echo "<br>";

    // Ejemplo de uso
    listarMensajesRemitente($mensajes, "usuario1@dominio.tld");
?>