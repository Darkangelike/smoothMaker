<?php

require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

$id = null;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    $id = $_GET["id"];
}

if (!$id) {
    redirect("index.php");
}

$cocktail = findCocktailById($id);

$commentaires = findAllCommentsByCocktail($id);

$pageTitle = $cocktail["name"];

render("cocktails/show", compact("cocktail", "commentaires", "pageTitle"));

?>

