<?php

/**
 * Return a PDO object to interact with the database
 * 
 * @return PDO
 */
function getPdo():PDO{
    $pdo = new PDO ("mysql:host=localhost;dbname=bar;charset=utf8", "baradmin", "sizzle", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
}

/**
 * Returns an array of all the datas in the table "cocktails" in the database
 * 
 * @return array $cocktails 
 */
function findAllCocktails():array
{

    $pdo = getPdo();
    $requestAllCocktails = $pdo->query("SELECT * FROM cocktails");
    $cocktails = $requestAllCocktails->fetchAll();
    return $cocktails;

}

/**
 * Find a cocktail using its id in the "cocktails" table in the database
 * Return an array of a cocktail 
 * 
 * @param integer $cocktail_id
 * @return array|bool
 */
function findCocktailById(int $cocktail_id):array | bool
{
    $pdo = getPdo();
    $requestOneCocktail = $pdo->prepare("SELECT * FROM cocktails WHERE id= :cocktail_id");

    $requestOneCocktail->execute(
        [
        "cocktail_id" => $cocktail_id
    ]
    );

    $cocktail = $requestOneCocktail->fetch();

    return $cocktail;
}

/**
 * Finds all comments associated to a cocktail
 * Returns an array of all comments
 * 
 * @param integer $cocktail_id
 * @return array|bool
 * 
 */
function findAllCommentsByCocktail(int $cocktail_id):array | bool
{
    $pdo = getPdo();

    $requestComments = $pdo->prepare("SELECT * FROM comments WHERE cocktail_id= :cocktail_id");

    $requestComments->execute([
        "cocktail_id" => $cocktail_id
    ]);

    $comments = $requestComments->fetchAll();

    return $comments;
}

/**
 * Find a comment using its associated ID
 * 
 * @param integer $comment_id
 * @return array|bool
 * 
 */
function findCommentById(int $comment_id):array|bool
{
    $pdo = getPdo();
    $requestOneComment = $pdo->prepare("SELECT * FROM comments WHERE id=:comment_id");
    $requestOneComment->execute(
        [
            "comment_id" => $comment_id
        ]
        );

    $comment = $requestOneComment->fetch();
    return $comment;
}

/**
 * Inserts the new comment in the "comment" table
 * 
 * @param string $author
 * @param string $content
 * @param string $cocktail_id
 */
function saveComment($author, $content, $cocktail_id):void
{
    $pdo = getPdo();

    $insertCommentRequest = $pdo->prepare("INSERT INTO comments (author, content, cocktail_id) VALUES (:author, :content, :cocktail_id)");

    $insertCommentRequest->execute([
        "author" => $author,
        "content" => $content,
        "cocktail_id" => $cocktail_id
    ]); 
}

/**
 * delete a comment using its associated ID
 * 
 * @param integer $comment_id
 * 
 */
function removeComment(int $comment_id):void
{
    $pdo = getPdo();
    $deleteCommentRequest = $pdo->prepare("DELETE FROM comments WHERE id=:comment_id");
    $deleteCommentRequest->execute(
        [
            "comment_id" => $comment_id
        ]
        );
}

?>