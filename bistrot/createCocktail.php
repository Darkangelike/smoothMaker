<?php 




$pageTitle = "Nouveau cocktail";

ob_start();

require_once "templates/cocktails/create.html.php";

$pageContent = ob_get_clean();

require_once "templates/layout.html.php";


?>