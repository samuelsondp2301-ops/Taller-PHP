<?php
$a = 10;
$b = 4;
$c = 6;
$d = 2;

if ($d == 0) {
    $resultado = pow(($a - $c), 2);
    echo "Como D es igual a 0, se calculó (A - C)².<br>";
} else {
    $resultado = pow(($a - $b), 3) / $d;
    echo "Como D es mayor a 0, se calculó (A - B)³ / D.<br>";
}

echo "El resultado de la expresión es: " . $resultado . "<br><br>";
?>