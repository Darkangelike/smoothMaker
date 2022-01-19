<?php 

require_once "core/libraries/tools.php";
require_once "core/Models/Cocktail.php";

// Controller

$modelCocktails = new Cocktail();

$cocktails = $modelCocktails->findAllCocktails();

$pageTitle = "Every cocktails";

render("cocktails/index", compact("cocktails", "pageTitle"));

?>