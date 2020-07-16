<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    
</body>
</html>


<?php 
try {
    $pdo = new PDO('mysql:dbname=boutique;host=127.0.0.1','root');
    //echo 'connexion réussie';

}catch(PDOException $e){
    echo 'connexion échouée: ' .$e->getMessage();
}

require ('src/Vetements.php');
require ('src/Chaussures.php');
require ('src/Pantalons.php');
require ('src/Chapeau.php');


/*$chaussures = $pdo->query('SELECT * FROM chaussures')->fetchAll(PDO::FETCH_OBJ);
foreach($chaussures as $chaussure){
    $chaussure = new Chaussures($chaussure->prix_chaussure, $chaussure->stock_chaussure, $chaussure->nom_chaussure, $chaussure->pointure);
    //print_r($chaussure);
}

Faire l'équivalent du foreach au dessus mais via la méthode FETCH_CLASS
*/

?>

<div class="container">

    <h1><i class="fas fa-store"></i></h1>
        <h2>Chaussures</h2>
            <div class="shoe">
            
            <?php
            $chaussures = $pdo->query("SELECT * FROM chaussures");
            $chaussures->setFetchMode(PDO::FETCH_CLASS, 'Chaussures',
                    array('nom_chaussure','prix_chaussure','stock_chaussure','pointure_chaussure'));
                foreach($chaussures as $chaussure){
                echo ("<div class='art'><p><b>Modèle : $chaussure->nom_chaussure</b></p>
                        <p> Prix : $chaussure->prix_chaussure €</p>
                        <p> Pointure : $chaussure->pointure_chaussure</p>
                            <p><i>Stock : $chaussure->stock_chaussure dispo</i></p> </div>")
            ;}  
            ; ?>
            </div>
    
        <h2>Pantalons </h2>
            <div class="shoe">
            <?php
            $pantalons = $pdo->query("SELECT * FROM pantalons");
            $pantalons->setFetchMode(PDO::FETCH_CLASS, 'Pantalons',
                    array('nom_pantalon','prix_pantalon','stock_pantalon','taille_pantalon'));
                foreach($pantalons as $pantalon){
                echo ("<div class='art'><p><b>Modèle : $pantalon->nom_pantalon</b></p>
                        <p> Prix : $pantalon->prix_pantalon €</p>
                        <p> Taille : $pantalon->taille_pantalon</p>
                            <p><i>Stock : $pantalon->stock_pantalon dispo</i></p></div>")
            ;}
            ?>
            </div>

</div>


<?php
/*
$pull = new Vetements(40, "dispo");
echo "pull"." ". $pull->dispo." ".$pull->prix . "<br>";

$nike = new Chaussures(99, "dispo", 42);
echo "nike"." ".$nike->dispo." ".$nike->prix." ".$nike->pointure . "<br>";

$jeans = new Pantalons (50, "pas dispo", "XL");
echo "jeans"." ".$jeans->dispo." ".$jeans->prix." ".$jeans->taille . "<br>";

$borsa = new Chapeau (30, "dispo", 55, "velours");
echo "chapeau"." ".$borsa->dispo." ".$borsa->prix." ".$borsa->tourdetete." ".$borsa->matiere. "<br>";
*/