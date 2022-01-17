<?php
require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

$pdo = getPdo();

$id = null;
if(!empty($_POST['id']) && ctype_digit($_POST['id'])){
    $id = $_POST['id'];
}

if(!$id){
    die("Erreur sur l'ID. Pars .");
}
//verifier que le cocktail existe

$maRequetePourUnComment = $pdo->prepare("SELECT * FROM comments WHERE id = :comment_id");

$maRequetePourUnComment->execute([
    "comment_id"=> $id
]);

$comment = $maRequetePourUnComment->fetch();

if(!$comment){
    
  redirect("cocktail.php?id={$comment['cocktail_id']}");
    
}

$requeteSuppression = $pdo->prepare("DELETE FROM comments WHERE id = :comment_id");

$requeteSuppression->execute([
    "comment_id" => $id
]);

redirect("cocktail.php?id={$comment['cocktail_id']}");