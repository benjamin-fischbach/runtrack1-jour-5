<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 1-1</title>
</head>
<body>

<?php  

$role = "admin";

if ($role === "admin") { 
    echo "Accès complet autorisé"; 
} elseif ($role === "éditeur") { 
    echo "Accès limité aux modifications"; 
} else { 
    echo "Accès lecture seule"; 
}

?>

</body>
</html>