<?php

require_once "db.php";
require_once "logic.php";

if (isset($_POST["edit"])) {
    $id = $_POST["edit"];
}

$request = "SELECT * FROM messages WHERE id=" . $id;

echo "<br>Echo of the request:<br>";
echo $request;

$message = mysqli_query($myConnection, $request);

echo "<br>Success or failure of the request:<br>";
if ($message) {
  echo "<br>Message was recuperated<br>";
} else {
  echo "<br>Error: " . $request . "<br>" . mysqli_error($myConnection);
}

echo "<br>var dump of messages:<br>";
var_dump($message);

echo "<br>ID:<br>";
echo $message["id"];
echo "<br>Author:<br>";
echo $message["author"];
echo "<br>Description:<br>";
echo $message["description"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the message</title>
</head>
<body>
    

<p>
	<b><h3 style="color:<?= $message["color"] ?>" class="mb-0 pb-0">
						<?= $message["author"] ?>:</h3></b><br>
						<?= strip_tags($message["description"]) ?>
</p>
</body>
</html>


