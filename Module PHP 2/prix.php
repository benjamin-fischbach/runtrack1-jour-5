<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 2 - Prix</title>
</head>
<body>

<?php  
const TVA = 0.2;
$prixHT = 4;
$prixTTC = ($prixHT * TVA) + $prixHT;

echo "Le prix TCC est de " . $prixTTC . "€ !";
?>


</body>
</html>