<?php

//calculo matematicas
$examen_matematicas = 3.6;
$matematicas1 = 4.0;
$matematicas2 = 5.0;
$matematicas3 = 3.0;
$promedio = ($matematicas1 + $matematicas2 + $matematicas3) / 3;
$promediomatematicas = $promedio * 0.10;
$examen_finalM = $examen_matematicas * 0.90;
$nota_finalM = $promediomatematicas + $examen_finalM;
// calcuo fisica
$examen_fisica = 4.1;
$fisica1 = 4.0;
$fisica2 = 5.0;
$promediofisica = ($fisica1 + $fisica2) / 2;
$promediofisica = $promediofisica * 0.20;
$examen_finalF = $examen_fisica * 0.80;
$nota_finalF = $promediofisica + $examen_finalF;

//calculo quimica
$examen_quimica = 5.0;
$quimica1 = 2.9;
$quimica2 = 3.7;
$quimica3 = 4.0;
$promedioquimica = ($quimica1 + $quimica2 + $quimica3) / 3;
$promedioquimica = $promedioquimica * 0.15;
$examen_finalQ = $examen_quimica * 0.85;
$nota_finalQ = $promedioquimica + $examen_finalQ;


echo " Su promedio final en las 3 materias es de : " . number_format(($nota_finalM + $nota_finalF + $nota_finalQ) / 3, 1) . " <br> ";
" <br> ";
echo " Su promedio final en matematicas es de : " . number_format($nota_finalM, 1) . " <br> ";
echo " Su promedio final en fisica es de : " . number_format($nota_finalF, 1) . " <br> ";
echo " Su promedio final en quimica es de : " . number_format($nota_finalQ, 1) ;

?>