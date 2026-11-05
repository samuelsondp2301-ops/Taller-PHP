<?php
$capital = 50000;
$interes_porcentaje = 0.15;

$intereses = $capital * $interes_porcentaje;

if ($intereses > 7000) {
    $dinero_total = $capital + $intereses;
    echo "Los intereses superan los 7000. Se reinvierten.<br>";
    echo "Dinero total final en la cuenta: " . $dinero_total;
} else {
    echo "Los intereses no superan los 7000. No se reinvierten.<br>";
    echo "Intereses generados: " . $intereses;
}
?>
