<?php
$x_naranjas = 48000;
$y_docena = 6;
$k_venta_final = 42000;

$docenas = $x_naranjas / 12;
$inversion = $docenas * $y_docena;
$ganancia_neta = $k_venta_final - $inversion;

$porcentaje_ganancia = ($ganancia_neta * 100) / $inversion;

echo "Inversión inicial: " . number_format($inversion, 0) . " <br>";
echo "Ganancia neta: " . number_format($ganancia_neta, 0) . " <br>";
echo "Porcentaje de ganancia: " . number_format($porcentaje_ganancia, 2) . " % " . "<br>";
?>