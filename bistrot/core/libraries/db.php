<?php



/**
 * Retourne un objet PDO pour intéragir avec la base de données
 * 
 * @return PDO
 * 
 * 
 */
function getPdo():PDO{

        $pdo = new PDO("mysql:host=localhost;dbname=bistrot;charset=utf8", "barman","glouglou", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;

}




?>


