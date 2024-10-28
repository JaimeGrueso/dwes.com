Escribir un script PHP que genera un vector de 10 elementos con números diferentes
y al final los visualice.

<?php
    $vector = array();
    for ($i=0; $i < 10; $i++) { 
        $vector[$i] = rand(1, 10);
        for ($j=0; $j < $i; $j++) { 
            if ($vector[$i] == $vector[$j]) {
                $i--; // Si se encuentra un valor duplicado, se decrementa la iteracion (si es la 3, pasa a la 2 para que luego sea otra vez la 3)
                break;
            }
        }
    }
    echo "<br>";
    echo "Vector: " . implode(" ", $vector) . "<br>";