<?php
$a = 2;
$b = 3;
$c = 8;
$d = 4;
$e = 1;
$f = 5;

$denominador = ($a * $e) - ($b * $d);

if ($denominador == 0) {
    echo "El sistema no tiene solución única porque el denominador es cero.";
} else {
    $x = (($c * $e) - ($b * $f)) / $denominador;
    $y = (($a * $f) - ($c * $d)) / $denominador;

    echo "Valor de X: " . $x . "<br>";
    echo "Valor de Y: " . $y;
}
?>