<?php
require_once "db.php";

$status = false;

// Get data which were submitted in the form

if (isset($_POST["username"]) && !empty($_POST["username"])) {
    $newUsername = htmlspecialchars($_POST["username"]);
}

if (isset($_POST["message"]) && !empty($_POST["message"])) {
    $newMessage = htmlspecialchars($_POST["message"]);
}

if (isset($_POST["color"]) && !empty($_POST["color"])) {
    $newColor = htmlspecialchars($_POST["color"]);
}


echo "New username: " . $newUsername . "<br>";
echo "New message: " . $newMessage . "<br>";
echo "New color: " . $newColor . "<br>";

//$_POST

$request = "INSERT INTO messages (author, description, color) VALUES ('$newUsername', '$newMessage', '$newColor')";

// Check if the request was a success or failure

$success = mysqli_query($myConnection, $request);

if ($success) {
  echo "New record created successfully";
} else {
  echo "Error: " . $request . "<br>" . mysqli_error($myConnection);
}

// redirect to the index page
// method header()

if ($success) {
    header("Location: index.php");
    exit;
}

?>