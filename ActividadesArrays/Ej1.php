/*1. Escribir un script PHP que genera un vector de 10 elementos numéricos entre 1 y 100,
y posteriormente los visualice por consola.*/ <br>
<?php
    $vector = [];
    for ($i = 0; $i < 10; $i++) {
        $vector[] = rand(1, 100);
    }
    foreach ($vector as $valor) {
        echo $valor . "\n";
    }
?>