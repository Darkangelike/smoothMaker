<?php

require_once "core/libraries/tools.php";
require_once dirname(__FILE__)."/core/Models/Cocktail.php";
require_once dirname(__FILE__)."/core/Models/Comment.php";

$id = null;
$comment = null;
$author = null;
$content = null;

// Retrieving the GET ID

if (!empty($_POST["cocktail_id"]) && ctype_digit($_POST["cocktail_id"])) {
    $cocktail_id = $_POST["cocktail_id"];
}

// Retrieving author if valid

if (!empty($_POST["author"])) {
    $author = htmlspecialchars($_POST["author"]);
}

// Retrieving content if valid

if (!empty($_POST["content"])) {
    $content = htmlspecialchars($_POST["content"]);
}

// Checking if all the values to insert are valid

if (!$author || !$content || !$cocktail_id) { 
    redirect("cocktail.php?id={$cocktail_id}");
}

// Instancing Cocktail class
$modelCocktail = new Cocktail();

// Checking if cocktail ID exists

$cocktail = $modelCocktail->findCocktailById($cocktail_id);

// ERROR IF COCKTAIL ID DOES NOT EXIST IN DATABASE AND REDIRECTION TO INDEX

if (!$cocktail) {
    redirect("index.php?info=comErr");
}

// Instancing Comment class
$modelComment = new Comment();
 
// Saving the comment in the database
$comment = $modelComment->saveComment($author, $content, $cocktail["id"]);

redirect("cocktail.php?id={$cocktail_id}");

?>