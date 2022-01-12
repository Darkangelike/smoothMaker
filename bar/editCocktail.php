<?php

require_once "db.php";

$id = null;
$name = null;
$image = null;
$ingredients = null;

if (!empty($_GET["edit"]) && ctype_digit($_GET["edit"])) {
    $id = $_GET["edit"];

    $cocktailRequest = $pdo->prepare("SELECT * FROM cocktails WHERE id=:id");

    $cocktailRequest->execute([
        "id" => $id
    ]);

    $cocktail = $cocktailRequest->fetch();

}

if (!empty($_POST["id"]) && ctype_digit($_POST["id"])
    && !empty($_POST["name"])
    && !empty($_POST["ingredients"])
    && !empty($_POST["image"])
) {
    $id = $_POST["id"];
    $name = htmlspecialchars($_POST["name"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]);
    $image = htmlspecialchars($_POST["image"]);

}

if ($id && $name && $ingredients && $image) {

    $updateCocktail = $pdo->prepare("UPDATE cocktails SET name = :name, ingredients = :ingredients, image = :image WHERE id=:id");

    $updateCocktail->execute([
        "id" => $id,
        "name" => $name,
        "ingredients" => $ingredients,
        "image" => $image
    ]);

    header("Location: cocktail.php?id=$id");
    exit();
}

$pageTitle = $cocktail["name"];

ob_start();

require_once "templates/cocktails/edit.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";

?>