<?php
$nombre = "Carlos Pérez";
$horas_normales = 160;
$pago_hora_normal = 1000;
$horas_extras = 10;
$hijos = 2;

$sueldo_normal = $horas_normales * $pago_hora_normal;
$pago_extra = $pago_hora_normal * 1.25;
$sueldo_extras = $horas_extras * $pago_extra;
$sueldo_base = $sueldo_normal + $sueldo_extras;

$actualizacion = 25000;
$monto_hijos = $hijos * 17300;
$prima_hogar = 18000;

$total_asignaciones = $actualizacion + $monto_hijos + $prima_hogar;

$paro_forzoso = $sueldo_base * 0.05;
$politica = $sueldo_base * 0.02;
$caja_ahorro = $sueldo_base * 0.07;

$total_deducciones = $paro_forzoso + $politica + $caja_ahorro;

$sueldo_neto = ($sueldo_base + $total_asignaciones) - $total_deducciones;

echo "Trabajador: " . $nombre . "<br>";
echo "Sueldo Base: " . number_format($sueldo_base, 0) . "<br>";
echo "Total Asignaciones: " . number_format($total_asignaciones, 0) . "<br>";
echo "Total Deducciones: " . number_format($total_deducciones, 0) . "<br>";
echo "Sueldo Neto: " . number_format($sueldo_neto, 0);
?>