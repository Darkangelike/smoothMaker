<?php

require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

$commentaire_id = null;

// Get comment ID from submitted POST form

if (!empty($_POST["commentaire_id"]) && ctype_digit($_POST["commentaire_id"])) {
    $commentaire_id = $_POST["commentaire_id"];
}

// Get cocktail ID for a possible redirect

if (!empty($_POST["cocktail_id"]) && ctype_digit($_POST["cocktail_id"])) {
    $cocktail_id = $_POST["cocktail_id"];
}

// check comment ID

$commentaire = findCommentById($commentaire_id);

// Redirect with error message if commentaire is false

if (!$commentaire) {
    redirect("cocktail.php?info=errCom&id={$cocktail_id}");
}

// Remove comment

removeComment($commentaire_id);

redirect("cocktail.php?id={$cocktail_id}");

?>