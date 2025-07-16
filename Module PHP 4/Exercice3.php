<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 3</title>
</head>
<body>

Votre commande
<b>
<?php  
$status = "en cours"; 
$message = match ($status) {
    "en cours" => "est en cours de traitement.",
    "expediée" => "a été expédiée.",
    "livrée"   => "a été livrée.",
    "annulée"  => "a été annulée.",
    default    => ": Statut inconnu.",
};
echo $message;
?>
</b>
</body>
</html>