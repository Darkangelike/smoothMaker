<?php

session_start();

$test = false;
$isConnected = false;
$filter = false;

if (isset($_GET["logout"])) {
    unset($_SESSION["isConnected"]);
}

if (isset($_SESSION["isConnected"])) {
    $isConnected = $_SESSION["isConnected"];
}


$voyages = [
    
    [
        "country" => "Easter Island",
        "price" => 3245.99,
        "duration" => 14,
        "image" => "images/easter_island.jpg",
        "persons" => 2,
        "transportation" => "Plane"
    ],
    [
        "country" => "Egypt",
        "price" => 2200.99,
        "duration" => 10,
        "image" => "images/egypt.jpg",
        "persons" => 2,
        "transportation" => "Plane"
    ],
    [
        "country" => "Australia",
        "price" => 1500,
        "duration" => 7,
        "image" => "images/australia.jpg",
        "persons" => 2,
        "transportation" => "Boat"
    ],
    [
        "country" => "Brazil",
        "price" => 1100,
        "duration" => 8,
        "image" => "images/brazil.jpg",
        "persons" => 1,
        "transportation" => "Plane"
    ],

];

$users = [
    [
        "id" => 1,
        "username" => "미나",
        "password" => "미챙"
    ],
    [
        "id" => 2,
        "username" => "Chaeyoung",
        "password" => "Michaeng"
    ]
    ];


if (
    (isset($_POST["username"]) && !empty($_POST["username"]))
    && 
    (isset($_POST["password"]) && !empty($_POST["password"]))
    ) {

    $username = $_POST["username"];

    foreach ($users as $user) {
        if ($username == $user["username"]) {
            if ($_POST["password"] == $user["password"]) {
                $isConnected = true;
            $_SESSION["isConnected"] = true;
            }
        }
    }

}



?>

<!-- 미챙 -->