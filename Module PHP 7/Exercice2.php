<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 7 - Exercice 2</title>
</head>
<body>

<?php

$nbr=5;

function afficherEtoile($nbr){
  for ($i = 1; $i <= $nbr; $i++)
  {
    for ($j = 1; $j <= $i; $j++)
      {
          echo " * ";
      }
      echo "<br>";
  }
}

afficherEtoile($nbr);


?>



</body>
</html>