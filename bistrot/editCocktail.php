<?php 

require_once "db.php";


$cocktailName = null;
$ingredients = null;
$image = null;
$id = null;

if(!empty($_POST['id']) && ctype_digit($_POST['id'])){

    $id =$_POST['id'];
}
if(!empty($_POST['nom'])){

    $cocktailName = htmlspecialchars($_POST['nom']);
}
if(!empty($_POST['image'])){

    $image = htmlspecialchars($_POST['image']);
}

if(!empty($_POST['ingredients'])){

    $ingredients = htmlspecialchars($_POST['ingredients']);
}



if($cocktailName && $ingredients && $image && $id){

    $maRequeteCreationCocktail = $pdo->prepare("UPDATE cocktails SET
    name = :cocktail_name, ingredients = :cocktail_ingredients, image= :cocktail_image
    WHERE id = :cocktail_id
     ");

    $maRequeteCreationCocktail->execute([
        "cocktail_name" => $cocktailName,
        "cocktail_ingredients" => $ingredients,
        "cocktail_image" => $image,
        "cocktail_id" =>$id
    ]);
  
    header("Location: cocktail.php?id={$id}");
}

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

require_once "templates/cocktails/edit.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";


?>