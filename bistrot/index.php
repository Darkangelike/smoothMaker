<?php
    require_once "core/libraries/db.php";
    require_once "core/libraries/tools.php";

    $pdo = getPdo();

    $requeteTousLesCocktails = $pdo->query("SELECT * FROM cocktails");              

    $cocktails = $requeteTousLesCocktails->fetchAll();





    
    $pageTitle = "Tous les cocktails";

 


 render("cocktails/index",compact('cocktails', 'pageTitle'));





?>
