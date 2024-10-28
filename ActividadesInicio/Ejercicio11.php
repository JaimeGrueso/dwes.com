/*11. Crea un script PHP que asigna a una variable tu peso en Kg y luego calcule el peso
equivalente en onzas. Una onza son 28,3495 gramos.*/ <br>

<?php
    $pesokg = 77;
    $onza = 28.3495;

    $pesoenonzas = ($pesokg *1000) * $onza;
    echo "Tu peso en onzas es: $pesoenonzas<br>";
?>