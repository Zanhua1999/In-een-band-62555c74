<?php
echo "Het albumoverzicht: " . PHP_EOL;
$product = array("Citizen of Glass" => 4.5, "Night" => 9.0, "New Eyes" =>5.0,"Strange Trails" =>9.0);
$totaal = 0;
foreach ($product as $key => $value) {
    echo $key . "Kost €" . $value . PHP_EOL;
$totaal += $value;
}
echo "Het totaalbedrag van alle albums is €" . $totaal  . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . $totaal/count($product);
?>