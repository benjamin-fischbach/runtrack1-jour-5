<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 1-2</title>
</head>
<body>

<?php  

$role = "admin";

switch ($role) {
    case "admin":
        echo "Accès complet autorisé";
        break;
    case "éditeur":
        echo "Accès limité aux modifications";
        break;
    case "lecteur":
        echo "Accès lecture seule";
        break;
    default:
        echo "Rôle inconnu";
}

?>

</body>
</html>