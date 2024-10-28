Repetir la función anterior pero tiene que devolver el salario neto, el importe de IRPF
y el importe de la seguridad social. <br>

<?php
    function salarioNeto($salarioBruto, $irpf = 20, $seguridadSocial = 15) {
        $irpfImporte = $salarioBruto * ($irpf / 100);
        $seguridadSocialImporte = $salarioBruto * ($seguridadSocial / 100);
        return array(
            "salarioNeto" => $salarioBruto - $irpfImporte - $seguridadSocialImporte,
            "irpfImporte" => $irpfImporte,
            "seguridadSocialImporte" => $seguridadSocialImporte
        );
    }

    $salarioBruto = 1200;
    $salarioNeto = salarioNeto($salarioBruto);
    echo "El salario neto es de " . $salarioNeto["salarioNeto"] . "€, el importe de IRPF es de " . $salarioNeto["irpfImporte"] . "€ y el importe de la seguridad social es de " . $salarioNeto["seguridadSocialImporte"] . "€";
?>