<?php

require_once "db.php";

if (!empty($_POST["id"]) && ctype_digit($_POST["id"])) {
    $id = $_POST["id"];
}

if (!$id) {
    die("This cocktail does not exist.");
}

$deleteRequest = $pdo->prepare("DELETE FROM cocktails WHERE id=:id");

$deleteRequest->execute([
    "id" => $id
]);

echo "<h1>The cocktail n°" . $id . " was successfully deleted.</h1><br><h2>You will be automatically redirected to the main page.</h3>";
header("refresh: 2; url=index.php");

?>