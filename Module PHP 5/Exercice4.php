<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 5 - Exercice 4</title>
</head>
<body>


<?php
$a = 1;
$z = 100;

$somme = 0;
for ($i = $a; $i <= $z; $i++) {
    $somme += $i;
}

echo "La somme des nombres de " . $a . " à " . $z . " est : ";
?>

<b>
<?php
echo $somme
?> 
</b>






</body>
</html>