<?php

require_once "db.php";
$maxDifficulty = 5;
$isRequested = false;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM kebabs WHERE id=" . $id;
    $kebab = mysqli_query($myConnection, $sql);
    $kebab = $kebab->fetch_assoc();
    $query = $kebab;

        // if ($kebab) {
        $isRequested = true; 
        // }

// } else if (isset($_POST["create"])) {
//     $idmeat = $_POST["meat"];
//     $idsauce = $_POST["sauce"];
//     $garnish = $_POST["garnish"];
//     $difficulty = $_POST["difficulty"];

//     echo "ID meat : " . $idmeat . "<br>ID sauce : " . $idsauce . "<br>Garnish : " . $garnish . "<br>Difficulty : " . $difficulty . "<br>";
    
//     $sql = "INSERT INTO akebabs (meat, sauce, garnish) VALUES ($idmeat, $idsauce, '$garnish')";

//     $insertNewKebab = mysqli_query($myConnection, $sql);
//     $query = $insertNewKebab;
//         // if ($insertNewKebab) {
//             $isRequested = true;   
//         // }

} else {
    $sql = "SELECT * FROM kebabs";

    $kebabs = mysqli_query($myConnection, $sql);
    $query = $kebabs;
        // if ($kebabs) {
            $isRequested = true;
        // }

};

if ((isset($isRequested) && isset($query))
&& $isRequested && !$query) {
    echo "Error: " . $sql . "<br>" . mysqli_error($myConnection);
}

?>