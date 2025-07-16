<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 4 - Exercice 4</title>
</head>
<body>

Il fait :
<b>
<?php  
$temperature = "25"; 
$message = ($temperature > 20) ? "Chaud" : (($temperature < 10) ? "Froid" : "Doux") ;


echo $message;
?>
</b>
</body>
</html>