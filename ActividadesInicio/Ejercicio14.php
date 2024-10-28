/*14. Crea un script PHP que calcule y muestre la cantidad de KB y bytes que hay en 5 MB.*/ <br>

<?php
    $mb = 5;
    $kb = $mb * 1024; // 1 MB = 1024 KB
    $bytes = $kb * 1024; // 1 KB = 1024 bytes
    echo "5 MB son $kb KB y $bytes bytes.";
?>
