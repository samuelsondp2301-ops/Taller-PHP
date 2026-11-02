<?php 
$total_de_estudiantes = 45;
$totalhombres = 29;
$totalmujeres = $total_de_estudiantes - $totalhombres;

$porcentajehombres = ($totalhombres / $total_de_estudiantes) * 100;
$porcentajemujeres = ($totalmujeres / $total_de_estudiantes) * 100;

echo " El porcentaje de hombres en el salon es de: " . number_format ($porcentajehombres,0) . "%"  . "<br>";
echo " El porcentaje de mujeres en el salon es de: " . number_format ($porcentajemujeres,0) . "%";


?>