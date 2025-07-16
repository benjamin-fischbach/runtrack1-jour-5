<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 3 - Exercice 3</title>
</head>
<body>

<?php  
$x = true;
$y = false;

echo "x AND y donne : ". ($x && $y ? 'true' : 'false');
?><br>
<?php  
echo "x OR y donne : ". ($x || $y ? 'true' : 'false');
?><br>
<?php  
echo "x XOR y donne : ". (($x xor $y) ? 'true' : 'false');
?><br>

</body>
</html>