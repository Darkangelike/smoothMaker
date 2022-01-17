<?php
require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

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

// Checking if cocktail ID exists

$cocktail = findCocktailById($cocktail_id);

// ERROR IF COCKTAIL ID DOES NOT EXIST IN DATABASE AND REDIRECTION TO INDEX

if (!$cocktail) {
    redirect("index.php?info=comErr");
}
  
$comment = saveComment($author, $content, $cocktail["id"]);

redirect("cocktail.php?id={$cocktail_id}");

?>