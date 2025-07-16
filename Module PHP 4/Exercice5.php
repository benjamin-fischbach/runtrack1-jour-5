<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 5</title>
</head>
<body>


<?php  

$size = "S";
const TVA = 0.20;

switch ($size) {
    case "S":
        $prixHT = 10;
        break;
    case "M":
        $prixHT = 12;
        break;
    case "L":
          $prixHT = 14;
        break;
    case "XL":
         $prixHT = 16;
        break;
    default:
    echo  "Taille Inconnue"; 
    exit();
}

$tva = $prixHT * TVA;
$prixTTC = $prixHT + $tva;

echo "Le prix du t-shirt taille $size est de $prixTTC € TTC ($prixHT HT + $tva TVA).";
?>
</body>
</html>