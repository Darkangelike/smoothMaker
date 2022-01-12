<?php
require_once "db.php";

$id = null;
$comment = null;
$author = null;
$content = null;

// START OF DISPLAYING NEW COMMENT FORM

// Retrieving the GET ID

if (!empty($_POST["id"]) && ctype_digit($_POST["id"])) {
    $id = $_POST["id"];
}

// Retrieving author if valid

if (!empty($_POST["author"])) {
    $author = htmlspecialchars($_POST["author"]);
}

// Retrieving content if valid

if (!empty($_POST["content"])) {
    $comment = htmlspecialchars($_POST["content"]);
}


// Checking if all the values to insert are valid

if (!$author || !$content || !$id) { 
    die("Form is invalid");

}

// Checking if ID exists in cocktail table

$requestCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id=:cocktail_id");

$requestCocktail->execute([
    "cocktail_id" => $id
]);

$cocktail = $requestCocktail->fetch();

// ERROR IF COCKTAIL ID DOES NOT EXIST IN DATABASE AND REDIRECTION TO INDEX

if (!$cocktail) {
    die("This cocktail does not exist.");

    // header("Location: index.php?info=comErr");
    // exit();


}

    
  // Insert the new comment with pdo

    $insertCommentRequest = $pdo->prepare("INSERT INTO comments (author, content, cocktail_id) VALUES (:author, :content, :cocktail_id)");

    $insertCommentRequest->execute([
        "author" => $author,
        "content" => $content,
        "cocktail_id" => $id
    ]); 

    // Redirection to the cocktail page

    if ($insertCommentRequest) {

        echo "SUccessfully inserted";
        // header("Location: cocktail.php?id=$id");
        exit();


    } else {
        echo $author . "<br>" . $content . "<br>" . $id;
        exit();
    }








ob_start();

require_once "templates/cocktails/create.html.php";



$pageContent = ob_get_clean();
$pageTitle = "Write a comment";

require_once "templates/layout.html.php";



?>