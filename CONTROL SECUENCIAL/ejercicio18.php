<?php
$galones_surtidos = 15;
$litros_por_galon = 3.785;
$precio_litro = 100;

$total_litros = $galones_surtidos * $litros_por_galon;
$total_cobrar = $total_litros * $precio_litro;

echo "Galones surtidos: " . $galones_surtidos . "<br>";
echo "Total en litros: " . number_format($total_litros, 2) . " L<br>";
echo "Total a cobrar al cliente: " . number_format($total_cobrar, 0) . " Bolívares";
?>