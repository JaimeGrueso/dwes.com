Desarrollar una función que recibe una fecha en formato dd/mm/aaaa y devuelva
un valor indicando si el formato es correcto. 

<?php
    function validarFecha($fecha) {
        $fecha = explode("/", $fecha); // Convertimos la fecha en un array separando los elementos por el caracter "/"
        $dia = $fecha[0]; // Extraemos el día
        $mes = $fecha[1]; // Extraemos el mes
        $anio = $fecha[2]; // Extraemos el año
        
        if (checkdate($mes, $dia, $anio)) { // Si la fecha es correcta
            return "La fecha es correcta";
        } else { // Si la fecha no es correcta
            return "La fecha no es correcta";
        }
    }
    
    // Llamada a la función con un ejemplo de uso
    $fecha = "31/12/2021";
    echo validarFecha($fecha);
?>