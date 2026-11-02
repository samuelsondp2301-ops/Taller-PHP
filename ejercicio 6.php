<?php 
$total_de_estudiantes = 45;
$totalhombres = 29;
$totalmujeres = $total_de_estudiantes - $totalhombres;

$porcentajehombres = ($totalhombres / $total_de_estudiantes) * 100;
$porcentajemujeres = ($totalmujeres / $total_de_estudiantes) * 100;

echo " el porcentaje de hombres en el salon es de: " . number_format ($porcentajehombres,0) . "%"  . "<br>";
echo " el porcentaje de mujeres en el salon es de: " . number_format ($porcentajemujeres,0) . "%";


?>