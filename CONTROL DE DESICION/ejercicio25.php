<?php
$sueldo = 35000;

if ($sueldo < 40000) {
    $nuevo_sueldo = $sueldo + ($sueldo * 0.15);
    echo "El sueldo es inferior a 40.000. Se aplicó un 15% de aumento.<br>";
} else {
    $nuevo_sueldo = $sueldo + ($sueldo * 0.12);
    echo "El sueldo es mayor o igual a 40.000. Se aplicó un 12% de aumento.<br>";
}

echo "Nuevo sueldo del trabajador: " . number_format($nuevo_sueldo, 2) . "<br><br>";
?>