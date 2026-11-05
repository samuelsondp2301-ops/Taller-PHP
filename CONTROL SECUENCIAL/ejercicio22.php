<?php
$p_contado = 1000;
$t_cuota = 100;

$total_cuotas = 12 * $t_cuota;
$recargo_dinero = $total_cuotas - $p_contado;

$porcentaje_recargo = ($recargo_dinero * 100) / $p_contado;

echo "Precio al contado: " . number_format($p_contado, 0) . " <br>";
echo "Precio total en 12 cuotas: " . number_format($total_cuotas, 0) . " <br>";
echo "Porcentaje de recargo cobrado: " . number_format($porcentaje_recargo, 2) . " % " . "<br>";
?>