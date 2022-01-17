<?php





function redirect($url){

    header("Location: {$url}");
    exit();
}




 /**
  * genere le rendu d'une page a partir d'un template 
  * et des donnees fournies
  *
  *@param string $nomDeTemplate
  *@param array $donnees
  *
  */
function render(string $nomDeTemplate, array $donnees):void{

  
    
    ob_start();

       
     extract($donnees);

     
    
    require_once "templates/{$nomDeTemplate}.html.php";

    $pageContent = ob_get_clean();

    
    require_once "templates/layout.html.php";

    

    
}




   