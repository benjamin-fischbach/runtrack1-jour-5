<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 7 - Exercice 5</title>
</head>
<body>

<?php

function pairImpair($debut, $fin, $mode) {

    $i = $debut;
    while ($i <= $fin) {
        if ($i % 2 == $mode) {
            echo $i . " ";
        }
        $i++;
    }
}


echo "Les nombres pair entre 7 et 99 sont : <br> ";
pairimpair(7 , 99, 0);

echo "<br> <br>";

echo "Les nombres impair entre 59 et 169 sont : <br> ";
pairimpair(59 , 169, 1);


// $nombres = array(array(),array());

// function pairimpair($debut, $fin) {
// for ($i = $debut; $i <= $fin; $i++) {
//         if ($i % 2 == 0) {
//         array_push($nombres[1], $i);
// }        else {
//         array_push($nombres[0], $i);
// }
// } 

// echo "Les nombres pair entre 7 et 99 sont : [$pair] <br> ";
// echo "<br> <br>";
// echo "Les nombres impair entre 59 et 169 sont : [$impair]<br> ";
// }

?>



</body>
</html>