<?php

$host = "localhost";
$username = "messageboardadmin";
$password = "Michaeng";
$db = "messageboard";

$myConnection = mysqli_connect($host, $username, $password, $db);

if(!$myConnection) {
    echo "CONNECTION FAILED";
}

?>