Desarrollar una función que calcule y muestre el factorial de un número. <br>
 
<?php
    function factorialNumero($n) {
        $factorial = 1;
        for ($i=1; $i<=$n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    $n = 5;
    echo "El factorial de $n es " . factorialNumero($n);
?>
