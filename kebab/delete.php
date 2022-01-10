<?php

require_once "db.php";

if (!empty($_POST["delete"]) && ctype_digit($_POST["delete"])) {



    $id = $_POST["delete"];

    $sql = "DELETE FROM kebabs WHERE id =" . $id;

    $result = mysqli_query($myConnection, $sql);

    if ($result){
        echo "<h1>The kebab n°" . $id . " was successfully deleted.</h1><br><h3>You will be automatically redirected.</h3>";

        header("refresh: 2; url=index.php");
        exit();

    } else {
        echo "ERROR: " . $sql . "<br><br>" . mysqli_error($myConnection);
    }
}

?>