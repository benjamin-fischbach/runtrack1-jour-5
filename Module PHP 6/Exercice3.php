<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Module 6 - Exercice 3</title>
</head>
<body>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
}
th {
    width: 50px;
}
</style>
<?php

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

echo "Le nombre de casquette en stock est : ". $produits[1]["stock"] . "<br>";

$produits[] = ["nom" => "Veste", "prix" => 40 , "stock" => 25];

?>


<?php
foreach($produits as $produit) {
    
    var_dump($produit["stock"]);

}
?>

<table>
    <tr>
        <th><?php echo $produits[0]["nom"]; ?></th>
        <th><?php echo $produits[1]["nom"]; ?></th>
        <th><?php echo $produits[2]["nom"]; ?></th>
        <th><?php echo $produits[3]["nom"]; ?></th>
    </tr>
    <tr>
        <th><?php echo $produits[0]["prix"]. "€"; ?></th>
        <th><?php echo $produits[1]["prix"]. "€"; ?></th>
        <th><?php echo $produits[2]["prix"]. "€"; ?></th>
        <th><?php echo $produits[3]["prix"]. "€"; ?></th>
    </tr>
    <tr>
        <th><?php echo $produits[0]["stock"]; ?></th>
        <th><?php echo $produits[1]["stock"]; ?></th>
        <th><?php echo $produits[2]["stock"]; ?></th>
        <th><?php echo $produits[3]["stock"]; ?></th>
    </tr>
</table>






</body>
</html>