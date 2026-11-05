<?php
$lectura_anterior = 1200;
$lectura_actual = 1550;
$costo_kilovatio = 50;

$kilovatios_consumidos = $lectura_actual - $lectura_anterior;
$total_pagar = $kilovatios_consumidos * $costo_kilovatio;

echo "Kilovatios consumidos: " . $kilovatios_consumidos . "<br>";
echo "Total a pagar por luz eléctrica: " . number_format($total_pagar, 0) . "<br>";
?>