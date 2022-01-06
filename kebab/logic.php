<?php

require_once "db.php";

$sql = "SELECT * FROM kebabs";

$kebabs = mysqli_query($myConnection, $sql);



?>