<?php

require_once "db.php";

$display = false;
if (isset($_GET["display"])) {
$display = true;
}

// $messages = [
//     [
//         "author" => "Mina",
//         "message" => "Ilboninimnida",
//         "color" => "blue"
//     ],
//     [
//         "author" => "Chaeyoung",
//         "message" => "Michaeng",
//         "color" => "orange"
//     ],
//     [
//         "author" => "Twice",
//         "message" => "One in a million",
//         "color" => "pink"
//     ],
//     [
//         "author" => "jihyo",
//         "message" => "Annyeong yeorobun",
//         "color" => "gold"
//     ]
//     ];

// SQL REQUEST TO THE DATABASE

if (isset($_GET["edit"]) && $_GET["edit"]) {
    $id = htmlspecialchars($_GET["edit"]);

    $request = "SELECT messages.author, messages.description, messages.color FROM messages where id=" . $id;


    $message = mysqli_query($myConnection, $request);

    $message = $message->fetch_assoc();
    
} else if (isset($_POST["editSubmitted"]) && $_POST["editSubmitted"]) {
  $editSubmitted = $_POST["editSubmitted"];
  $editedAuthor = htmlspecialchars($_POST["username"]);
  $editedMessage = htmlspecialchars($_POST["message"]);
  $editedColor = $_POST["color"];

  $request = "UPDATE messages SET author ='" . $editedAuthor . "', description ='" . $editedMessage . "', color='" . $editedColor . "' WHERE id=" . $editSubmitted;

  $message = mysqli_query($myConnection, $request);
} else {

    $request = "SELECT * from messages";

    $messages = mysqli_query($myConnection, $request);

}
?>