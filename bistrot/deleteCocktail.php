<?php
require_once "db.php";

$id = null;
if(!empty($_POST['id']) && ctype_digit($_POST['id'])){
    $id = $_POST['id'];
}

if(!$id){
    die("Erreur sur l'ID. Pars .");
}
//verifier que le cocktail existe

$maRequetePourUnCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id = :cocktail_id");

$maRequetePourUnCocktail->execute([
    "cocktail_id"=> $id
]);

$cocktail = $maRequetePourUnCocktail->fetch();

if(!$cocktail){
    header("Location: index.php?info=errDel");
}

$requeteSuppression = $pdo->prepare("DELETE FROM cocktails WHERE id = :cocktail_id");

$requeteSuppression->execute([
    "cocktail_id" => $id
]);

header("Location: index.php");
