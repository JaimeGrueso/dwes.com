/*15. Crea un script PHP que asigna a variables el peso (en Kg) y la altura (en metros).
Luego, calcule el índice de masa corporal. Finalmente, muestre en pantalla el
enunciado Tu índice de masa corporal es <imc>, donde <imc> es el índice de masa
corporal calculado con dos dígitos decimales.*/ <br>

<?php
    $peso = 70; // Peso en kilogramos
    $altura = 1.75; // Altura en metros
    $imc = $peso / ($altura * $altura); // Fórmula del IMC
    echo "Tu índice de masa corporal es " . number_format($imc, 2); // Mostrar con 2 decimales
?>
