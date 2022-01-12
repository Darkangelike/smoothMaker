<?php 
require_once "db.php";


$cocktailName = null;
$ingredients = null;
$image = null;

if(!empty($_POST['nom'])){

    $cocktailName = htmlspecialchars($_POST['nom']);
}
if(!empty($_POST['image'])){

    $image = htmlspecialchars($_POST['image']);
}

if(!empty($_POST['ingredients'])){

    $ingredients = htmlspecialchars($_POST['ingredients']);
}



if($cocktailName && $ingredients && $image){

    $maRequeteCreationCocktail = $pdo->prepare("INSERT INTO cocktails 
    (name, ingredients, image ) VALUES(:cocktail_name, :cocktail_ingredients, :cocktail_image)");

    $maRequeteCreationCocktail->execute([
        "cocktail_name" => $cocktailName,
        "cocktail_ingredients" => $ingredients,
        "cocktail_image" => $image
    ]);
    $id = $pdo->lastInsertId();
    header("Location: cocktail.php?id={$id}");
}




$pageTitle = "Nouveau cocktail";

ob_start();

require_once "templates/cocktails/create.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";


?>