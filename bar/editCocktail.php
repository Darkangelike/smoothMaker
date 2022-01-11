<?php

require_once "db.php";

$id = null;
$nom = null;
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
    && !empty($_POST["nom"])
    && !empty($_POST["ingredients"])
    && !empty($_POST["image"])
) {
    $id = $_POST["id"];
    $nom = htmlspecialchars($_POST["nom"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]);
    $image = htmlspecialchars($_POST["image"]);

}

if ($id && $nom && $ingredients && $image) {

    $updateCocktail = $pdo->prepare("UPDATE cocktails SET nom = :nom, ingredients = :ingredients, image = :image WHERE id=:id");

    $updateCocktail->execute([
        "id" => $id,
        "nom" => $nom,
        "ingredients" => $ingredients,
        "image" => $image
    ]);

    header("Location: cocktail.php?id=$id");
}

$pageTitle = $cocktail["nom"];

ob_start();

require_once "templates/cocktails/edit.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";

?>