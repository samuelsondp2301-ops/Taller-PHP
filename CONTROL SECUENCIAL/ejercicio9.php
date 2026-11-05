<?php

$precio_hora = 50000;
$horas_trabajadas = 210;
$sueldo_base = $precio_hora * $horas_trabajadas;
$descuento = $sueldo_base * 0.20;
$salario_neto = $sueldo_base - $descuento;

echo "Su sueldo total es de: " . number_format($salario_neto, 0) . " pesos";

?>