<?php
$pvp = 100000; 
$precio_final = 80000; 

$monto_descuento = $pvp - $precio_final;
$porcentaje_descuento = ($monto_descuento * 100) / $pvp;

echo "PVP: " . number_format($pvp, 0) . "<br>";
echo "Precio final pagado: " . number_format($precio_final, 0) . "<br>";
echo "Porcentaje de descuento aplicado: " . number_format($porcentaje_descuento, 2) . " % " . "<br>";
?>