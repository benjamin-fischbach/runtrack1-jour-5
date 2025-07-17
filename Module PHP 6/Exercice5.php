<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 5</title>
</head>
<body>

<?php

const TVA = 0.20;

$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

$sommeunpaid = 0;
$ca = 0;


foreach ($commandes as $commande) {
    echo "Commande de " . $commande["client"] . " : " . $commande["montant_ht"] . "€ HT, " . $commande["montant_ht"] * (1 + TVA) . "€ TTC - " .  $commande["statut"] . "<br>";

    $ca +=  $commande["montant_ht"];

    if  ($commande["statut"] == "en attente") {
        $sommeunpaid += $commande["montant_ht"] ;
    } 
}


$caTTC = $ca * (1 + TVA);
$sommeUnpaidTTC = $sommeunpaid * (1 + TVA);

$percent = round(($sommeUnpaidTTC/$caTTC) , 4) * 100;


echo "<br> Le chiffre d'affaire HT est ". $ca. " €. <br> 
Le chiffre d'affaire TTC est ". $caTTC. " €. <br>
Le chiffre d'affaire qu'il reste à réglé est $sommeunpaid € HT, soit " . $percent . "% <br> ";

?>



</body>
</html>