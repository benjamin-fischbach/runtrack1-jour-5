<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 2</title>
</head>
<body>

<?php  

$jour = "lundi";

switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":    
        echo "Jour ouvré";
        break;

    case "samedi":
    case "dimanche":
        echo "Weekend";
        break;
        
    default:
        echo "Jour inconnu";
}

?>

</body>
</html>