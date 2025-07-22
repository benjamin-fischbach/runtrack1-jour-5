<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 7 - Exercice 4</title>
</head>
<body>

<?php

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function moyenneEleve($eleve){

    $nbr_note = 0;
    $sum_total = 0;

    foreach($eleve as $matiere => $note) {
        if($matiere != "prenom") {
            $sum_total += $note;
            $nbr_note++;
        } 
    }   

   return round($sum_total / $nbr_note, 2);
}

function estAdmis($nbr) {
    return ($nbr >= 10) ? "Admis(e)" : "Rejeté(e)";
}

function affichage($eleve) {
    $moyenne = moyenneEleve($eleve);
    $admission = estAdmis($moyenne);

    echo $eleve['prenom'] . " , avec une moyenne générale de $moyenne /20, est  $admission. <br>";

}

foreach ($classe as $eleve) {
    affichage($eleve);
}


?>



</body>
</html>