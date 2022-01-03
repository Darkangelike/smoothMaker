<?php 

session_start();

$password = "Michaeng";
$isConnected = false;

// Checking if the user is ALREADY logged in
if (isset ($_SESSION["isConnected"]) && $_SESSION["isConnected"] ) {
    $isConnected = true;
}

// Checking if there is a log out action
if (isset($_POST["logout"]) && $_POST["logout"]) {
    unset($_SESSION["isConnected"]);
    $isConnected = false;
} else {
    $_SESSION["logout"] = false;
}

// Checking if the user enters a correct password
// RESETS the connection to FALSE if nothing above is true
if (isset($_SESSION["isConnected"]) && isset($_POST["login"]) && $_POST["login"] == $password) {
    $isConnected = true;
    $_SESSION["isConnected"] = $isConnected;
} else {
    $_SESSION["isConnected"] = $isConnected;
}

if (isset($_GET["drink"]) && $_GET["drink"]=="coffee") {
    require_once "coffee.php";
} else if (isset($_GET["drink"]) && $_GET["drink"]=="tea") {
    require_once "tea.php";
} else if (isset($_GET["drink"]) && $_GET["drink"]=="soju") {
    require_once "soju.php";
} else {
    require_once "question.php";
}
?>