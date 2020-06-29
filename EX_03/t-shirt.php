<?php
$nom_produit = "T-shirt simple";
$couleur = "blanc";
$prix = 10.50;
$disponible = true;
$quantite = 10;

echo "<h3>" . $nom_produit . "</h3>";

echo "<p> le nom du produit est " . $nom_produit . "</p>";
echo "<p> il reste " . $quantite . " produit en stock "."</p>";
echo "<p> le produit" . $nom_produit .  " est de couleur " . $couleur . "</p>";

echo "<h4>" . $nom_produit . "</h4>";

echo "<p> Acheter 3 produits couterait " . $prix *3 . "</p>";
echo "<p> Acheter la totalite des produits disponibles couterait " . $quantite * $prix . "</p>";
echo "<p> Si 3 produits sont vendus </h4>";

if ($disponible == true) {
echo "<p> Le produit " . $nom_produit . " est disponible en ligne </p>";
}

if ($disponible == false) {
echo "<p> Le produit " . $nom_produit . " n'est malheureusement plus disponible </p>";
}

if ($quantite < 5) {
echo "<P> Il reste " . $quantite . " produits en magasin </p>";
}

if ($quantite > 5) {
echo "<P> Il ne reste plus que " . $quantite . " produits en magasin </p>";  
}

if ($quantite = 1) {
echo "<P> Il ne reste qu'un produit en magasin </p>";    
}

if ($quantite = 0) {
echo "<p> Il ne reste plus de produit en magasin </p>";
}

?>
