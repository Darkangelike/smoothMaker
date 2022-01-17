<?php 

require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

    $pdo = getPdo();

    

$id = null;

if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
    $id = $_GET['id'];
}

if(!$id){
   // die('Désole, je ne trouve pas ce cocktail');
    header("Location: index.php?info=noId");
    exit();
}



$maRequetePourUnCocktail = $pdo->prepare("SELECT * 
                        FROM cocktails WHERE id = :cocktail_id");

$maRequetePourUnCocktail->execute([
    "cocktail_id" => $id
]);


$cocktail = $maRequetePourUnCocktail->fetch();



if(!$cocktail){
    header("Location: index.php?info=noId");
    exit();
}

$maRequetePourDesCommentaires = $pdo->prepare("SELECT * FROM comments 
                WHERE cocktail_id = :cocktail_id");

$maRequetePourDesCommentaires->execute([
    "cocktail_id" => $id
]);

$commentaires= $maRequetePourDesCommentaires->fetchAll();




$pageTitle = $cocktail['name'];




render("cocktails/show",compact('cocktail', 'commentaires', 'pageTitle'));


?>