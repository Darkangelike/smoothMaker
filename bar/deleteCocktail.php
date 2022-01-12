<?php

require_once "db.php";

$id = null;

// Check if POST_ID is set and is a digit

if (!empty($_POST["id"]) && ctype_digit($_POST["id"])) {
    $id = $_POST["id"];
}

if (!$id) {
    die("This cocktail does not exist.");
}

// Check if cocktail id exists in the database

$requestOneCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id= :cocktail_id");

$requestOneCocktail->execute([
    "cocktail_id" => $id
]);

$resultCocktail = $requestOneCocktail->fetch();

// Stops the script if the request returns an empty object

if (!$resultCocktail) {
    die("This cocktail does not exist.");
}

// Prepare the delete request

$deleteRequest = $pdo->prepare("DELETE FROM cocktails WHERE id=:id");

$deleteRequest->execute([
    "id" => $id
]);

echo "<h1>The cocktail n°" . $id . " was successfully deleted.</h1><br><h2>You will be automatically redirected to the main page.</h3>";
header("refresh: 2; url=index.php");


?>