<?php

require_once "db.php";

$display = false;
if (isset($_GET["display"])) {
$display = true;
}

$messages = [
    [
        "author" => "Mina",
        "message" => "Ilboninimnida",
        "color" => "blue"
    ],
    [
        "author" => "Chaeyoung",
        "message" => "Michaeng",
        "color" => "orange"
    ],
    [
        "author" => "Twice",
        "message" => "One in a million",
        "color" => "pink"
    ],
    [
        "author" => "jihyo",
        "message" => "Annyeong yeorobun",
        "color" => "gold"
    ]
    ];

// SQL REQUEST TO THE DATABASE

$request = "SELECT * from messages";

$messages = mysqli_query($myConnection, $request);


?>