Desarrollar una función que calcule la ecuación lineal a partir de dos coordenadas
que pertenecen a esa recta. Tiene que dos valores: la pendiente de la recta y el
punto de corte en el eje y <br>

<?php
    function ecuacionLineal($x1, $y1, $x2, $y2) {
        $pendiente = ($y2 - $y1) / ($x2 - $x1); // Calculamos la pendiente
        $puntoCorte = $y1 - $pendiente * $x1; // Calculamos el punto de corte en el eje y
        
        return "La ecuación de la recta es y = " . $pendiente . "x + " . $puntoCorte;
    }
    
    // Llamada a la función con un ejemplo de uso
    $x1 = 1;
    $y1 = 2;
    $x2 = 3;
    $y2 = 4;
    echo ecuacionLineal($x1, $y1, $x2, $y2);
?>