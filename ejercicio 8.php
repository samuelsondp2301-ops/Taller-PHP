<?php
$ladoA = 5;
$ladoB = 6;
$ladoC = 7;

$semiperimetro = ($ladoA + $ladoB + $ladoC) / 2;


$area = sqrt($semiperimetro * ($semiperimetro - $ladoA) * ($semiperimetro - $ladoB) * ($semiperimetro - $ladoC));


echo "Lado a: " . $ladoA . "<br>";
echo "Lado b: " . $ladoB . "<br>";
echo "Lado c: " . $ladoC . "<br>";
echo "El semiperímetro (p) es: " . $semiperimetro . "<br>";
echo "El área del triángulo es: " . number_format($area, 2);
?>