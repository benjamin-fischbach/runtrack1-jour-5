<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 2</title>
</head>
<body>


<?php
$eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

/* sort($eleves); */

$bonEleve = 0;

foreach($eleves as $prenom => $note) {
    echo "$prenom a obtenu $note/20 <br>"; 

    if($note >= 10) {
        $bonEleve++;
    }
}


echo $bonEleve . " élèves ont obtenu une note au dessus de la moyenne."

/* echo "Alice"." a obtenu ". $eleves[2] ."/20 <br>";
echo "Benoît"." a obtenu ". $eleves[0] ."/20 <br>";
echo "Claire"." a obtenu ". $eleves[3] ."/20 <br>";
echo "David"." a obtenu ". $eleves[1] ."/20 <br>"; */

?>






</body>
</html>