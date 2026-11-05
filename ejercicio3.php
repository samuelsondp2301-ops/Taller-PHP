<?php

$sueldo_base = 1700000;
$comision_de_ventas = 0.10;
$numero_de_ventas = 3;

$valorcomision = ($sueldo_base * $comision_de_ventas) * $numero_de_ventas;
$sueldototal = $sueldo_base + $valorcomision;

echo " Su comision por las tres ventas es de " . $valorcomision . "<br>";
echo " Su sueldo total es de " . $sueldototal;

?>