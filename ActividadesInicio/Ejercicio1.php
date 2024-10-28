/*Crea un script PHP que visualiza las siguientes magnitudes (utiliza un número en
notación científica y elige una precisión diferente para cada dato):
    • La distancia de la tierra al sol.
    • La distancia de Plutón al Sol (5,9064x109km).
    • El diámetro del Sol.*/ <br>

<?php
    // Distancia de la Tierra al Sol en kilómetros
    $distancia_tierra_sol = 1.496e8; // 1.496 x 10^8 km
    // Distancia de Plutón al Sol en kilómetros
    $distancia_pluton_sol = 5.9064e9; // 5.9064 x 10^9 km
    // Diámetro del Sol en kilómetros
    $diametro_sol = 1.392e6; // 1.392 x 10^6 km

    // Mostrar valores en notación científica usando print
    echo "Distancia de la Tierra al Sol: " . printf("%.3e", $distancia_tierra_sol) . " km<br>"; // Precisión 3
    echo "Distancia de Plutón al Sol: " . printf("%.4e", $distancia_pluton_sol) . " km<br>"; // Precisión 4
    echo "Diámetro del Sol: " . printf($diametro_sol, "%.2e") . " km<br>"; // Precisión 2
?>


