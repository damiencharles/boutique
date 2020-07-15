<?php 

require ('src/Vetements.php');
require ('src/Chaussures.php');
require ('src/Pantalons.php');
require ('src/Chapeau.php');

$pull = new Vetements(40, "dispo");
echo "pull"." ". $pull->dispo." ".$pull->prix . "<br>";

$nike = new Chaussures(99, "dispo", 42);
echo "nike"." ".$nike->dispo." ".$nike->prix." ".$nike->pointure . "<br>";

$jeans = new Pantalons (50, "pas dispo", "XL");
echo "jeans"." ".$jeans->dispo." ".$jeans->prix." ".$jeans->taille . "<br>";

$borsa = new Chapeau (30, "dispo", 55, "velours");
echo "chapeau"." ".$borsa->dispo." ".$borsa->prix." ".$borsa->tourdetete." ".$borsa->matiere. "<br>";