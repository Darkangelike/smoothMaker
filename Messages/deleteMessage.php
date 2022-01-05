<?php

require_once "db.php" ;

if (isset($_POST["delete"])) {
    $id = $_POST["delete"];
}

$request = "DELETE FROM messages WHERE id=" . $id;


// Check if the request was a success or failure

$success = mysqli_query($myConnection, $request);

if ($success) {
  echo "Record deleted successfully";
  header("Location: index.php");
  exit;
} else {
  echo "Error: " . $request . "<br>" . mysqli_error($myConnection);
}

?>

