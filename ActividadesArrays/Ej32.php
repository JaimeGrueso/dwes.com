<?php
    $fechas = [
        "2021-01-01",
        "2021-02-02",
        "2021-03-03",
        "2021-04-04",
        "2021-05-05"
    ];
        
    /* Visualizar la fecha más antigua, la más moderna y el periodo de tiempo entre ambas. */
    function fechasExtremas($fechas) {
        // Inicializamos las fechas más antigua y más moderna con la primera fecha del array
        $fechaMasAntigua = new DateTime($fechas[0]); // Creamos un objeto DateTime con la primera fecha del array 
        $fechaMasModerna = new DateTime($fechas[0]); // Creamos un objeto DateTime con la primera fecha del array
        
        foreach ($fechas as $fecha) { // Recorremos el array de fechas
            $fechaActual = new DateTime($fecha); // Creamos un objeto DateTime con la fecha actual

            if ($fechaActual < $fechaMasAntigua) { // Si la fecha actual es anterior a la fecha más antigua encontrada hasta ahora
                $fechaMasAntigua = $fechaActual; // Actualizamos la fecha más antigua encontrada hasta ahora con la fecha actual
            }
            
            if ($fechaActual > $fechaMasModerna) { // Si la fecha actual es posterior a la fecha más moderna encontrada hasta ahora
                $fechaMasModerna = $fechaActual; // Actualizamos la fecha más moderna encontrada hasta ahora con la fecha actual
            }
        }
        // Mostramos la fecha más antigua, la más moderna y el periodo de tiempo entre ambas
        echo "La fecha más antigua es " . $fechaMasAntigua->format('Y-m-d') . "<br>";
        echo "La fecha más moderna es " . $fechaMasModerna->format('Y-m-d') . "<br>";
        echo "El periodo de tiempo entre ambas es de " . $fechaMasAntigua->diff($fechaMasModerna)->format('%a') . " días.";
    }

    // Llamada a la función con un ejemplo de uso
    fechasExtremas($fechas);
?>
