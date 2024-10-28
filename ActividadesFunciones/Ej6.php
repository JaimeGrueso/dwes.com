Desarrolla una función que reciba como parámetros tres números que representen el
salario bruto, el porcentaje de IRPF y el porcentaje de seguridad social. Luego
devuelve el salario neto. Si no se incluye IRPF o porcentaje de seguridad social su
valor por defecto es 20% y 15% respectivamente.

<?php
    function salarioNeto($salarioBruto, $irpf = 20, $seguridadSocial = 15) {
        return $salarioBruto - ($salarioBruto * ($irpf / 100)) - ($salarioBruto * ($seguridadSocial / 100));
    }

    $salarioBruto = 1200;
    echo "El salario neto es de " . salarioNeto($salarioBruto) . "€";
?>