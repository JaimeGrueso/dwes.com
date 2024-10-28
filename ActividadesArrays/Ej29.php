29. Escribir un script PHP que introduzca nombres de personas y sus fechas de
nacimiento en un vector. Posteriormente visualizar el nombre y la fecha de nacimiento
de la persona de más edad. Pista: objeto date en PHP. <br>

<?php
    $personas = [
        "Juan" => "1990-01-01",
        "Maria" => "1980-02-02",
        "Pedro" => "1940-03-03",
        "Ana" => "1960-04-04",
        "Luis" => "1950-05-05"
    ];
        
    /* Visualizar el nombre y la fecha de nacimiento de la persona de más edad. */
    function personaMasEdad($personas) {
        $fechaMasAntigua = new DateTime();
        $nombreMasAntiguo = "";
        foreach ($personas as $nombre => $fecha) { // Recorremos el array de personas y fechas 
            $fechaNacimiento = new DateTime($fecha); // Creamos un objeto DateTime con la fecha de nacimiento de la persona actual
            if ($fechaNacimiento < $fechaMasAntigua) { // Si la fecha de nacimiento de la persona actual es anterior a la fecha más antigua encontrada hasta ahora  
                $fechaMasAntigua = $fechaNacimiento; // Actualizamos la fecha más antigua encontrada hasta ahora con la fecha de nacimiento de la persona actual
                $nombreMasAntiguo = $nombre; // Actualizamos el nombre de la persona más antigua encontrada hasta ahora con el nombre de la persona actual
            }
        }
        // Mostramos el nombre y la fecha de nacimiento de la persona más antigua encontrada
        echo "La persona más antigua es $nombreMasAntiguo, nacida el " . $fechaMasAntigua->format('Y-m-d') . ".";
    }

    // Llamada a la función con un ejemplo de uso
    personaMasEdad($personas);
?>
