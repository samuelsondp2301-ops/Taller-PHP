<?php
$n1 = 2;
$n2 = 1;
$n3 = 3;
$n4 = 4;
$n5 = 5;
$n6 = 10;
$n7 = 8;
$n8 = 20;

$total = ($n1 * 50000) + ($n2 * 20000) + ($n3 * 10000) + ($n4 * 5000) + ($n5 * 2000) + ($n6 * 1000) + ($n7 * 500) + ($n8 * 100);

echo "Cantidad de billetes de 50000: " . $n1 . "<br>";
echo "Cantidad de billetes de 20000: " . $n2 . "<br>";
echo "Cantidad de billetes de 10000: " . $n3 . "<br>";
echo "Cantidad de billetes de 5000: " . $n4 . "<br>";
echo "Cantidad de billetes de 2000: " . $n5 . "<br>";
echo "Cantidad de billetes de 1000: " . $n6 . "<br>";
echo "Cantidad de billetes de 500: " . $n7 . "<br>";
echo "Cantidad de billetes de 100: " . $n8 . "<br>";
echo "Total de dinero en el banco: " . number_format($total, 0);
?>