<?php

$notaparcial1 = 4.5;
$notaparcial2 = 4.0;
$notaparcial3 = 5.0;
$examen = 3.2;
$trabajo = 3.8;
$promedionotas = ($notaparcial1 + $notaparcial2 + $notaparcial3) / 3;

$calificacionparcial = $promedionotas * 0.55;
$examenfinal = $examen * 0.30;
$trabajofinal = $trabajo * 0.15;

$calificacionfinal = $calificacionparcial + $examenfinal + $trabajofinal;

echo " Su calificación final es de : " . number_format ($calificacionfinal, 1);


?>