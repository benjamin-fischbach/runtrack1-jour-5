<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 7 - Exercice 3</title>
</head>
<body>

<?php

// $impots = 0;
// $revenus = 0;

// $bareme = [
//     "tier1" => [
//         "min" => 0,
//         "max" => 9999,
//         "pourcentage" => 0
//     ],
//     "tier2" => [
//         "min" => 10000,
//         "max" => 19999,
//         "pourcentage" => 0.1
//     ],
//     "tier3" => [
//         "min" => 20000,
//         "max" => 34999,
//         "pourcentage" => 0.18
//     ],
//     "tier4" => [
//         "min" => 35000,
//         "max" => 49999,
//         "pourcentage" => 0.25
//     ],
//     "tier5" => [
//         "min" => 50000,
//         "max" => 64999, //pour l'exercice
//         "pourcentage" => 0.35
//     ],
// ];

// function calculImpots($revenus){
//     $totalimpot = (($revenus-tier[min])*tier[pourcentage])


// }
// echo $impots;

// calculImpots(16000);
// calculImpots(38000);
// calculImpots(64000);



// $IR = 0;
// const TIER1 = 0.10;
// const TIER2 = 0.25;
// const TIER3 = 0.35;

// function calculImpots($revenus){
//     if ($revenus >= 10000)  {
//     $IRtotal = (($revenus - 10000) * TIER1);
//     $revenus++;
//     } elseif ($revenus >= 20000) {
//     $IRtotal = (($revenus - 20000) * TIER2);
//     $revenus++;
//     }elseif (($revenus - 30000) * TIER3) {
//     $IRtotal = (($revenus - 30000) * TIER3);
//     $revenus++;
//     }
     
    

//     echo "Mes impôts sur le revenu à " . $revenus . " € seront de " . $IRtotal . " € <br>";
    
    

//     // $IR = ($revenus < 10000) ? 0 : 
//     //                             (($revenus >= 10000) ?  0.10 : 
//     //                                                     (($revenus >= 20000) ? 0.18 :
//     //                                                                            (($revenus >= 35000) ? 0.25 : 
//     //                                                                                                      0.35)));

// }

$montant = 0;

function calculImposable($revenu, $min, $max)
{
    return ($revenu > $max) ? ($max - $min) : ($revenu - $min);
}

function calculImpots($revenu)
{

    if ($revenu > 10000) {
        $imposable = calculImposable($revenu, 10000, 19999);
        $montant = $imposable * 0.1;
    }

    if ($revenu > 20000) {
        $imposable = calculImposable($revenu, 20000, 34999);
        $montant += $imposable * 0.18;
    }

    if ($revenu > 35000) {
        $imposable = calculImposable($revenu, 35000, 49999);
        $montant += $imposable * 0.25;
    }

    if ($revenu > 50000) {
        $imposable = calculImposable($revenu, 50000, 9999999999999999999);
        $montant += $imposable * 0.35;
    }

    return $montant;

}

echo "Avec un revenu de 12 000 €, l'impôt sera de ".calculImpots(12000)." € <br>";
echo "Avec un revenu de 16 000 €, l'impôt sera de ".calculImpots(16000)." € <br>";
echo "Avec un revenu de 38 000 €, l'impôt sera de ".calculImpots(38000)." € <br>";
echo "Avec un revenu de 64 000 €, l'impôt sera de ".calculImpots(64000)." € <br>";



?>



</body>
</html>