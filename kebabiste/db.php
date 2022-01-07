<?php


    $hote = "localhost";
    $username = "admin";
    $password = "kebab";
    $db = "kebabiste";

    $connexion = mysqli_connect($hote, $username, $password, $db);

    if(!$connexion){
        echo "ERREUR";
    }/* else{
        echo "PAS D'ERREUR";
    }
 */

// établit la connexion à la base de données
// doit créer la variable $connexion




?>