<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 6</title>
</head>
<body>

<?php

$count_eleve = 0;
$sum_math = 0;
$sum_fr = 0;
$sum_ang = 0;

$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ],
    "Michel" => [
        "maths" => 4,
        "francais" => 7,
        "anglais" => 9
    ]
];


foreach($eleves as $nom => $data) {
    $sum_total = 0;

    $count_eleve++;
    
    echo "<h1> $nom </h1>";

    foreach($data as $matiere => $notes) {
        $sum_total += $notes;
    
        echo  $matiere . " : " . $notes . "<br>";

        if($matiere === "maths") {
            $sum_math += $notes;
        } elseif ($matiere === "francais") {
            $sum_fr += $notes;
        } elseif ($matiere === "anglais") {
            $sum_ang += $notes;
        }

    }

    $moyenne = round(($sum_total/3), 2);

    $appreciation = ($moyenne > 15) ? "Excellent" : 
                                    (($moyenne > 12) ? 
                                                "Bon Travail" : 
                                                    (($moyenne < 12) ? 
                                                        "Peut mieux faire" 
                                                            : "Echec"));


    echo "Sa moyenne est de  $moyenne : $appreciation. <br><hr>";
}


echo "La moyenne de la classe en math est de " . round(($sum_math/$count_eleve), 2) . ". <br>";
echo "La moyenne de la classe en francais est de " . round(($sum_fr/$count_eleve), 2) . ". <br>";
echo "La moyenne de la classe en anglais est de " . round(($sum_ang/$count_eleve), 2) . ". <br>";


?>



</body>
</html>