<?php

require_once "db.php";
$maxDifficulty = 5;
$isRequested = false;

if (!empty($_GET["id"]) && ctype_digit($_GET["id"]) )
 {
    $id = $_GET["id"];
 } else if (!empty($_POST["id"]) && ctype_digit($_POST["id"])) {

    $id = $_POST["id"];
 } 

if (isset($id) && !empty($id)) {
    $sql = "SELECT * FROM kebabs WHERE id=" . $id;
    $kebab = mysqli_query($myConnection, $sql);
    $kebab = $kebab->fetch_assoc();
    $query = $kebab;

        // if ($kebab) {
        $isRequested = true; 
        // }

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