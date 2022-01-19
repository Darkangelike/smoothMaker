<?php

    require_once dirname(__FILE__)."/../libraries/db.php";

class Cocktail
{

    
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

}


?>