
Desarrollar una función que calcule la temperatura promedio en un día a partir de
varias temperaturas a lo largo del día pasadas como parámetros.

<?php
    // Define la función que calcula la temperatura promedio
    function temperaturaPromedio($temperaturas) {
        // Inicializa la variable $suma a 0 para acumular las temperaturas
        $suma = 0;
        
        // Recorre cada temperatura en el array $temperaturas
        foreach ($temperaturas as $temperatura) {
            // Suma cada temperatura a la variable $suma
            $suma += $temperatura;
        }
        
        // Calcula el promedio dividiendo la suma total por el número de temperaturas
        return $suma / count($temperaturas);
    }

    // Define un array de temperaturas registradas a lo largo del día
    $temperaturas = [20, 25, 30, 35, 40];
    
    // Muestra la temperatura promedio calculada utilizando la función temperaturaPromedio
    echo "La temperatura promedio en el día es de " . temperaturaPromedio($temperaturas) . " grados.";
?>