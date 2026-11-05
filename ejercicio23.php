<?php
$m_harina = 452;
$n_aceite = 197;
$b1_bulto = 132;
$b2_caja = 180;
$b3_detal_harina = 7.50;
$b4_detal_aceite = 14.50;

$bultos_completos = (int)($m_harina / 24);
$kilos_sobrantes = $m_harina % 24;
$ingreso_harina = ($bultos_completos * $b1_bulto) + ($kilos_sobrantes * $b3_detal_harina);

$cajas_completas = (int)($n_aceite / 15);
$litros_sobrantes = $n_aceite % 15;
$ingreso_aceite = ($cajas_completas * $b2_caja) + ($litros_sobrantes * $b4_detal_aceite);

$ingreso_total = $ingreso_harina + $ingreso_aceite;

echo "Ingreso por harina: " . $ingreso_harina . " <br>";
echo "Ingreso por aceite: " . $ingreso_aceite . " <br>";
echo "Ingreso Total: " . $ingreso_total ;
?>