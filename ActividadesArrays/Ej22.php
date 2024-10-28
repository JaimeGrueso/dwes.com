22.Escribir un script en PHP que gestiona un conjunto de movimientos bancarios en una
cuenta corriente, donde cada uno es:
• La clave del array es el número de cuenta.
• El valor de cada elemento es un array asociativo con el tipo de movimiento (solo
puede ser [I]ngreso o [R]eintegro), la fecha del movimiento (si quieres, y te atreves,
usa un objeto date), concepto y cantidad.
• Listar en formato de tabla la cantidad total de ingresos, reintegros y el saldo de la
cuenta.
• Buscar si ha habido algún ingreso procedente de una transferencia bancaria.
Pista: función str_contains().

<?php
$movimientos = [
    "ES1234567890123456789012" => [
        "tipo" => "I",
        "fecha" => "2021-10-01",
        "concepto" => "Nómina",
        "cantidad" => 1000
    ],
    "ES1234567890123456789013" => [
        "tipo" => "R",
        "fecha" => "2021-10-02",
        "concepto" => "Hipoteca",
        "cantidad" => 500
    ],
    "ES1234567890123456789014" => [
        "tipo" => "I",
        "fecha" => "2021-10-03",
        "concepto" => "Transferencia",
        "cantidad" => 200
    ],
    "ES1234567890123456789015" => [
        "tipo" => "R",
        "fecha" => "2021-10-04",
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
    echo "<td>{$movimiento["fecha"]}</td>";
    echo "<td>{$movimiento["concepto"]}</td>";
    echo "<td>{$movimiento["cantidad"]}</td>";
    echo "</tr>";
    if ($movimiento["tipo"] == "I") {
        $ingresos += $movimiento["cantidad"];
    } else {
        $reintegros += $movimiento["cantidad"];
    }
    $saldo += $movimiento["cantidad"];
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