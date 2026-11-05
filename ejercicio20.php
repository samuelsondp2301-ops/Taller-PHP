<?php
$capital_x = 10000;
$interes_y = 2000;
$tiempo = 4;

$razon = ($interes_y * 100) / ($capital_x * $tiempo);

echo "Capital prestado: " . number_format($capital_x, 0) . " <br>";
echo "Intereses pagados: " . number_format($interes_y, 0) . " <br>";
echo "Porcentaje anual cobrado : " . number_format($razon, 2) . " % " . "<br>";
?>