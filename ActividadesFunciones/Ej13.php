Desarrollar una función que reciba como parámetro un número que represente una
nota entre 0 y 10. Debe devolver la calificación correspondiente con la nota. Piensa
en una forma de gestionar notas no válidas <br>

<?php
    function calificacion($nota) {
        if ($nota < 0 || $nota > 10) {
            return "Nota no válida";
        } else if ($nota < 5) {
            return "Suspenso";
        } else if ($nota < 6) {
            return "Suficiente";
        } else if ($nota < 7) {
            return "Bien";
        } else if ($nota < 9) {
            return "Notable";
        } else {
            return "Sobresaliente";
        }
    }

    $nota = 7;
    echo "La calificación de la nota $nota es " . calificacion($nota) . ".";

    $nota = 11;
    echo "<br>La calificación de la nota $nota es " . calificacion($nota) . ".";

    $nota = 3;
    echo "<br>La calificación de la nota $nota es " . calificacion($nota) . ".";
?>