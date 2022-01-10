<?php 

    require_once "db.php";

    if (
    isset($_POST["id"])
    && !empty($_POST["meat"]) && ctype_digit($_POST["meat"])
    && !empty($_POST["garnish"])
    && !empty($_POST["sauce"]) && ctype_digit($_POST["sauce"])
    && !empty($_POST["difficulty"]) && ctype_digit($_POST["difficulty"])
    ) {

        $id = (int)($_POST["id"]);
        $meat = (int)($_POST["meat"]);
        $garnish = htmlspecialchars($_POST["garnish"]);
        $sauce = (int)($_POST["sauce"]);

        $difficulty = $_POST["difficulty"];
        $sql = "UPDATE kebabs SET meat = '$meat', garnish = '$garnish', sauce = '$sauce', difficulty = '$difficulty' WHERE id = $id;";

        $result = mysqli_query($myConnection, $sql);

    if ($result) {
        echo "<h1>The kebab n°" . $id . " was successfully edited</h1>.<br></h3>You will be redirected to the main page automatically.</h3>";
        header("refresh: 2; url=index.php");
        exit();
    } else {
        echo "ERROR: " . $sql . "<br><br>" . mysqli_error($myConnection, $sql);
    }
}


?>