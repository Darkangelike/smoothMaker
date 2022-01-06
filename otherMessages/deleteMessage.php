<?php
require_once "db.php";

if(
    isset($_POST['delete'])
&&  !empty($_POST['delete'])
){


        $id = $_POST['delete'];

        $id = htmlspecialchars($id);

        $sql = "DELETE FROM messages WHERE id = '$id'";

        $maRequete = mysqli_query($maConnection, $sql);

       
}

 header("Location: index.php");

