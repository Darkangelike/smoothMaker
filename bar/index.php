<?php 

require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

// Controller

$cocktails = findAllCocktails();

$pageTitle = "Every cocktails";

render("cocktails/index", compact("cocktails", "pageTitle"));

?>