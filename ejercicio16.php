<?php
$largo_lamina = 4;
$ancho_lamina = 1.5;
$consumo_pieza = 0.5; 

$area_lamina = $largo_lamina * $ancho_lamina;
$cantidad_piezas = (int)($area_lamina / $consumo_pieza);
$desperdicio = $area_lamina - ($cantidad_piezas * $consumo_pieza);

echo "Área total de la lámina: " . $area_lamina . " m²<br>";
echo "Piezas fabricadas: " . $cantidad_piezas . "<br>";
echo "Desperdicio: " . $desperdicio . " m²<br><br>";
?>