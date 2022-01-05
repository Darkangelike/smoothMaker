<?php
 /*   
    $messages = [

        [
            "auteur"=> "Luc",
            "description"=> "salut "
        ],
        [
            "auteur"=> "Patricia",
            "description"=> " je sais pas quoi ecrire"
        ],
        [
            "auteur"=> "Anna",
            "description"=> "moi je sais"
        ],
        [
            "auteur"=> "Bobby",
            "description"=> "ce matin j'ai mangé une pomme"
        ],


    ];
 */
    // CONNECTION DB

    $hote = "localhost";
    $username = "messageadmin";
    $password = "coucou";
    $db = "messageboard";

     $maConnection = mysqli_connect($hote, $username, $password, $db); 

     if(!$maConnection){
         echo "PROBLEME DE CONNEXION";
     }

   // echo(mysqli_error($maConnection));

   // REQUETE SQL 

     $maRequete = "SELECT * FROM messages";

     $messages = mysqli_query($maConnection, $maRequete);

 /*     var_dump($lesMessages);

     echo "<hr>";
     foreach($lesMessages as $unMessage){
        echo "<br>";
         echo($unMessage['auteur']);
         echo "<br>";
         echo($unMessage['description']);
         echo "<br>";
     } */

?>