<?php 
require_once "core/libraries/db.php";
require_once "core/libraries/tools.php";

$pdo = getPdo();


$cocktailId = null;
$author = null;
$content = null;

if(!empty($_POST['cocktailId']) && ctype_digit($_POST['cocktailId'])){

    $cocktailId= $_POST['cocktailId'];
}
if(!empty($_POST['author'])){

    $author = htmlspecialchars($_POST['author']);
}

if(!empty($_POST['content'])){

    $content = htmlspecialchars($_POST['content']);
}



if(!$cocktailId || !$content || !$author){

        redirect("cocktail.php?id={$cocktailId}");
}


// on vérifie si le cocktail existe bien avant de le commenter

$maRequetePourUnCocktail = $pdo->prepare("SELECT * 
                        FROM cocktails WHERE id = :cocktail_id");

$maRequetePourUnCocktail->execute([
    "cocktail_id" => $cocktailId
]);


$cocktail = $maRequetePourUnCocktail->fetch();



if(!$cocktail){
    redirect("index.php?info=noId");
 
}

    $maRequeteCreationComment = $pdo->prepare("INSERT INTO comments 
    (author, content, cocktail_id ) 
    VALUES(:comment_author, :comment_content, :cocktail_id)");

    $maRequeteCreationComment->execute([
        "comment_author" => $author,
        "comment_content" => $content,
        "cocktail_id" => $cocktailId
    ]);

 
    redirect("cocktail.php?id={$cocktailId}");
    






?>