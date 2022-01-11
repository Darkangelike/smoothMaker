<?php

require_once "db.php";

$id = null;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    $id = $_GET["id"];
}

if (!$id) {
    die("Sorry, this cocktail does not exist.");
}

$requestOneCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id= :cocktail_id");

$requestOneCocktail->execute([
    "cocktail_id" => $id
]);

$cocktail = $requestOneCocktail->fetch();

$pageTitle = $cocktail["nom"];

ob_start();

require_once "templates/cocktails/show.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php"

?>

