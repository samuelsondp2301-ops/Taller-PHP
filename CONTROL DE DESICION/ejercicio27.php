<?php
$val1 = 10;
$val2 = 5;
$val3 = 50;

$area_rectangulo = $val1 * $val2;
$area_triangulo = ($val1 * $val2) / 2;

if ($val3 == $area_rectangulo) {
    echo "Hay coincidencia: Se trata de un **Rectángulo** (Área: " . $area_rectangulo . ")";
} elseif ($val3 == $area_triangulo) {
    echo "Hay coincidencia: Se trata de un **Triángulo** (Área: " . $area_triangulo . ")";
} else {
    echo "No coincide con las figuras evaluadas para esos valores.";
}
?>