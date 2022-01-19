<?php

require_once "core/libraries/tools.php";
require_once dirname(__FILE__)."/core/Models/Comment.php";
require_once dirname(__FILE__)."/core/Models/Cocktail.php";


$id = null;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    $id = $_GET["id"];
}

if (!$id) {
    redirect("index.php?info=errID");
}

// Instancing Cocktail class
$modelCocktail = new Cocktail();

// Retrieving one cocktail using its associated id
$cocktail = $modelCocktail->findCocktailById($id);

// Instancing Comment class
$modelComment = new Comment();

// Retrieving all the comments associated with a cocktail_id
$commentaires = $modelComment->findAllCommentsByCocktail($id);

$pageTitle = $cocktail["name"];

render("cocktails/show", compact("cocktail", "commentaires", "pageTitle"));

?>

