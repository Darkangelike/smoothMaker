<?php
require_once "db.php";








$viandes = ["agneau", "veau", "dinde"];

$sauces=["blanche", "harissa", "moutarde"];




// logique requiert une connexion à la base de données
// logique a besoin d'une variable $connexion pour fonctionner 
// et pouvoir faire ses requetes SQL
//cree cette variable $kebabs pour la rendre disponible pour index.php



if(
    !empty($_GET['id'])
&&  ctype_digit($_GET['id'])
){
    //afficher un seul kebab par son id



    $id = $_GET['id'];

    $sql = "SELECT * FROM kebabs WHERE id = '$id'";
    $resultat = mysqli_query($connexion, $sql); 

    $kebab = $resultat->fetch_assoc();


}else{

    //sinon, je trouve tous les kebabs
    $sql = "SELECT * FROM kebabs";

$kebabs  = mysqli_query($connexion, $sql);
}



?>
