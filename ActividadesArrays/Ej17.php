Escribir un script PHP que rellena una matriz de 10 filas por 10 columnas con números
enteros y posteriormente hay que buscar el elemento mayor en la bisectriz superior y
el elemento mayor en la bisectriz inferior. Considerar que la diagonal principal se
encuentra en la bisectriz superior.

<?php
    $matriz = array();
    $mayorSuperior = 0;
    $mayorInferior = 0;

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $matriz[$i][$j] = rand(1, 100);
            if ($i < $j) {
                if ($matriz[$i][$j] > $mayorSuperior) {
                    $mayorSuperior = $matriz[$i][$j];
                }
            }
            if ($i > $j) {
                if ($matriz[$i][$j] > $mayorInferior) {
                    $mayorInferior = $matriz[$i][$j];
                }
            }
        }
    }
    /*echo "<br>";
    echo "Matriz:<br>";
    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            echo $matriz[$i][$j] . "";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "Mayor en la bisectriz superior: $mayorSuperior<br>";
    echo "Mayor en la bisectriz inferior: $mayorInferior<br>";*/

    echo "<br>";
    echo "Matriz:<br>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i=0; $i < 10; $i++) { 
        echo "<tr>";
        for ($j=0; $j < 10; $j++) { 
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "Mayor en la bisectriz superior: $mayorSuperior<br>";
    echo "Mayor en la bisectriz inferior: $mayorInferior<br>";
?>