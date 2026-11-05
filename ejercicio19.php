<?php
$presupuesto_total = 500000;

$ginecologia = $presupuesto_total * 0.40;
$traumatologia = $presupuesto_total * 0.30;
$pediatria = $presupuesto_total * 0.30;

echo "Presupuesto total: " . number_format($presupuesto_total, 0) . "<br>";
echo "Presupuesto para Ginecología (40%): " . number_format($ginecologia, 0) . "<br>";
echo "Presupuesto para Traumatología (30%): " . number_format($traumatologia, 0) . "<br>";
echo "Presupuesto para Pediatría (30%): " . number_format($pediatria, 0);
?>
