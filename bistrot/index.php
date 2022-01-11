<?php
    require_once "db.php";

    $requeteTousLesCocktails = $pdo->query("SELECT * FROM cocktails");              

    $cocktails = $requeteTousLesCocktails->fetchAll();





    
    $pageTitle = "Tous les cocktails";

    ob_start();
    
    require_once "templates/cocktails/index.html.php";

    $pageContent = ob_get_clean();

    require_once "templates/layout.html.php";

?>
