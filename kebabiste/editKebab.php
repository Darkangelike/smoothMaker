<?php

require_once "db.php";
echo "bien arrive sur cette page";

var_dump($_POST);

if(

    !empty($_POST['viande']) && ctype_digit($_POST['viande'])
    && !empty($_POST['garniture'])
    && !empty($_POST['sauce']) && ctype_digit($_POST['sauce'])
    && !empty($_POST['difficulte']) && ctype_digit($_POST['difficulte'])
    && !empty($_POST['id']) && ctype_digit($_POST['id'])
)
{

$viandeStr = $_POST['viande'];
$garnitureStr = $_POST['garniture'];
$sauceStr = $_POST['sauce'];
$difficulteStr = $_POST['difficulte'];
$id = (int)$_POST['id'];

//var_dump($sauce);

$viande = (int)$viandeStr;    
$sauce = (int)$sauceStr;    
$difficulte = (int)$difficulteStr;   
$garniture = htmlspecialchars($garnitureStr);


$sql = "UPDATE kebabs SET viande = '$viande', garniture = '$garniture', sauce = '$sauce', difficulte = '$difficulte'
 WHERE id = '$id' ";

$requete = mysqli_query($connexion, $sql);
echo mysqli_error($connexion);

header("Location: kebab.php?id=$id");

echo "bien modifié";


}



// recuperer les informations modifiées par l'utilisateur


//interagir avec la BDD pour faire cet update


//rediriger sur la page DU kebab



?>