<?php

require_once dirname(__FILE__)."/../libraries/db.php";

class Comment
{
    
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
 * @param integer $cocktail_id
 */
function saveComment(string $author, string $content, int $cocktail_id):void
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
}
?>