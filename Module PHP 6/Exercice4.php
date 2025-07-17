<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 4</title>
</head>
<body>

<?php

$temperatures = [30, 32, 34, 30, 35, 34, 31];

$somme = 0;
$nombre = 0;

foreach($temperatures as $temperature){
$somme += $temperature;
$nombre++;
}
$moyenne = $somme / $nombre;
echo "La température moyenne est de " . $moyenne . "C° <br>";
echo "Le nombre de températures est " . $nombre;
?>


</body>
</html>