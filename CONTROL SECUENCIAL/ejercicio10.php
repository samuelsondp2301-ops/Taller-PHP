<?php
$chelines = 500;
$dracmas = 1000;
$pesetas = 5000;

$conversion_pesetas = ($chelines * 956.871) / 100;

$conversion_dracmas = ($dracmas * 88.607) / 100;
$francos_franceses = $conversion_dracmas / 20.110;

$dolares = $pesetas / 122.499;
$liras_italianas = ($pesetas * 100) / 9.289;

echo "Equivalente en pesetas: " . number_format($conversion_pesetas, 2) . "<br>";
echo "Equivalente en francos franceses: " . number_format($francos_franceses, 2) . "<br>";
echo "Equivalente en dólares: " . number_format($dolares, 2) . "<br>";
echo "Equivalente en liras italianas: " . number_format($liras_italianas, 2);
?>