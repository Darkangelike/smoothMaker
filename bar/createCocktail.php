<?php 

require_once "db.php";

$nom = null;
$ingredients = null;
$image = null;
$id = null;

// CHECKING IF FORM IS CORRECT
if (
    !empty($_POST["nom"])
    && !empty($_POST["ingredients"])
    && !empty($_POST["image"])
) {

    // INITIALISING COCKTAIL VAR

    $nom = htmlspecialchars($_POST["nom"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]);
    $image = htmlspecialchars($_POST["image"]);
}

if ($nom && $ingredients && $image) {

    // PREPARING PDO

    $createCocktail = $pdo->prepare("INSERT INTO cocktails (nom, ingredients, image) VALUES (:nom, :ingredients, :image)");

    // INSERTION OF NEW VALUE

    $createCocktail->execute([
        "nom" => $nom,
        "ingredients" => $ingredients,
        "image" => $image
    ]);

    // GET LAST INSERTED ID

    $last_id = $pdo->lastInsertId();

    echo "<h1>The new cocktail was successfully created with the ID n°$last_id</h1><br>You will be automatically redirected to its page.";

    header("refresh:3 url=/bar/cocktail.php?id=$last_id");
    exit();

}

/*
if (!$nom && !$ingredients && !$image) {
    die("Unable to create, data is invalid.");
}
*/

ob_start();

require_once "templates/cocktails/create.html.php";

$pageContent = ob_get_clean();

$pageTitle = "Add a cocktail";

require_once "templates/layout.html.php";

?>