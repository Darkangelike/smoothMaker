<?php

require_once "db.php";

$id = null;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    $id = $_GET["id"];
}

if (!$id) {
    header("Location: index.php");
    exit();
}

$requestOneCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id= :cocktail_id");

$requestOneCocktail->execute([
    "cocktail_id" => $id
]);

$cocktail = $requestOneCocktail->fetch();

$requestComments = $pdo->prepare("SELECT * FROM comments WHERE cocktail_id= :cocktail_id");

$requestComments->execute([
    "cocktail_id" => $id
]);

$comments = $requestComments->fetchAll();

$pageTitle = $cocktail["name"];

ob_start();

require_once "templates/cocktails/show.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php"

?>

