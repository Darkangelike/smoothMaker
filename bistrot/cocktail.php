<?php 

require_once "db.php";

$id = null;

if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
    $id = $_GET['id'];
}

if(!$id){
    die('Désole, je ne trouve pas ce cocktail');
}



$maRequetePourUnCocktail = $pdo->prepare("SELECT * 
                        FROM cocktails WHERE id = :cocktail_id");

$maRequetePourUnCocktail->execute([
    "cocktail_id" => $id
]);


$cocktail = $maRequetePourUnCocktail->fetch();



$pageTitle = $cocktail['name'];

ob_start();

require_once "templates/cocktails/show.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";


?>