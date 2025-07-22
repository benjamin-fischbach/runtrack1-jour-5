<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 7 - Exercice 6</title>
</head>
<body>

<?php

function multiTable($nombre)
{
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat <br>"; 
    }
}

multiTable(0);

?>




</body>
</html>