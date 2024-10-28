31. Si en el ejercicio 22 no utilizaste un objeto date para la fecha del movimiento, es
momento de modificar el ejercicio y usar un objeto date.

<?php
$movimientos = [
    "ES1234567890123456789012" => [
        "tipo" => "I",
        "fecha" => new DateTime("2021-10-01"),
        "concepto" => "Nómina",
        "cantidad" => 1000
    ],
    "ES1234567890123456789013" => [
        "tipo" => "R",
        "fecha" => new DateTime("2021-10-02"),
        "concepto" => "Hipoteca",
        "cantidad" => 500
    ],
    "ES1234567890123456789014" => [
        "tipo" => "I",
        "fecha" => new DateTime("2021-10-03"),
        "concepto" => "Transferencia",
        "cantidad" => 200
    ],
    "ES1234567890123456789015" => [
        "tipo" => "R",
        "fecha" => new DateTime("2021-10-04"),
        "concepto" => "Luz",
        "cantidad" => 50
    ]
];

$ingresos = 0;
$reintegros = 0;
$saldo = 0;

echo "<table border='1'>";
echo "<tr><th>Fecha</th><th>Concepto</th><th>Cantidad</th></tr>";
foreach ($movimientos as $cuenta => $movimiento) {
    echo "<tr>";
    echo "<td>" . $movimiento["fecha"]->format('Y-m-d') . "</td>";
    echo "<td>{$movimiento["concepto"]}</td>";
    echo "<td>{$movimiento["cantidad"]}</td>";
    echo "</tr>";
    if ($movimiento["tipo"] == "I") {
        $ingresos += $movimiento["cantidad"];
    } else {
        $reintegros += $movimiento["cantidad"];
    }
    $saldo += ($movimiento["tipo"] == "I" ? $movimiento["cantidad"] : -$movimiento["cantidad"]);
}
echo "</table>";

echo "<p>Total de ingresos: $ingresos</p>";
echo "<p>Total de reintegros: $reintegros</p>";
echo "<p>Saldo de la cuenta: $saldo</p>";

$transferencia = "Transferencia";
foreach ($movimientos as $cuenta => $movimiento) {
    if (str_contains($movimiento["concepto"], $transferencia)) {
        echo "<p>Ha habido un ingreso procedente de una transferencia bancaria</p>";
        break;
    }
}
?>