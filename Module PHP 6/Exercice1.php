<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 1</title>
</head>
<body>


<?php
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

echo $villes[4]. "<br>";

$villes[0] = "Nice";

echo $villes[0]. "<br>";

$villes[] = "Reims";

echo $villes[10]. "<br>";

echo "Ce tableau contient ". count($villes) . " villes ! <br><br>";

foreach ($villes as $villes) {
    echo $villes . "<br>";
}

?>






</body>
</html>