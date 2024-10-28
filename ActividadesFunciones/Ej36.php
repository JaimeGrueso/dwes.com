Desarrollar una función que recibe una marca de tiempo con formato dd/mm/aaaa hh:mm 
y muestre si la fecha y la hora son correctas.

<?php
    function validarFechaHora($fechaHora) {
        $fechaHora = explode(" ", $fechaHora); // Convertimos la fecha y la hora en un array separando los elementos por el caracter " "
        $fecha = $fechaHora[0]; // Extraemos la fecha
        $hora = $fechaHora[1]; // Extraemos la hora
        
        $fecha = explode("/", $fecha); // Convertimos la fecha en un array separando los elementos por el caracter "/"
        $dia = $fecha[0]; // Extraemos el día
        $mes = $fecha[1]; // Extraemos el mes
        $anio = $fecha[2]; // Extraemos el año
        
        $hora = explode(":", $hora); // Convertimos la hora en un array separando los elementos por el caracter ":"
        $hora = $hora[0]; // Extraemos la hora
        $minutos = $hora[1]; // Extraemos los minutos
        
        if (checkdate($mes, $dia, $anio) && $hora >= 0 && $hora <= 23 && $minutos >= 0 && $minutos <= 59) { // Si la fecha y la hora son correctas
            return "La fecha y la hora son correctas";
        } else { // Si la fecha y la hora no son correctas
            return "La fecha y la hora no son correctas";
        }
    }
    
    // Llamada a la función con un ejemplo de uso
    $fechaHora = "31/12/2021 23:59";
    echo validarFechaHora($fechaHora);
?>
