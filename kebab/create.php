<?php

require_once "ingredients.php";
    require_once "logic.php";
$editMode = false;

if (isset($_GET["id"]) && ctype_digit($_GET["id"])) {
    $editMode = true;
    $id = $_GET["id"];
}

if (
    isset($_POST["create"])
    && !empty($_POST["meat"]) && ctype_digit($_POST["meat"])
    && !empty($_POST["garnish"])
    && !empty($_POST["sauce"]) && ctype_digit($_POST["sauce"])
    && !empty($_POST["difficulty"]) && ctype_digit($_POST["difficulty"])
) {

    $idMeat = $_POST["meat"];
    $idSauce = $_POST["sauce"];
    $garnish = $_POST["garnish"];
    $idDifficulty = $_POST["difficulty"];

    echo "ID meat : " . $idMeat . "<br>Garnish : " . $garnish . "<br>Sauce : " . $idSauce . "<br>Difficulty : " . $idDifficulty . "<br><br>";

    $sql = "INSERT INTO kebabs (meat, sauce, garnish, difficulty) VALUES ($idMeat, $idSauce, '$garnish', '$idDifficulty')";

    $insertNewKebab = mysqli_query($myConnection, $sql);
    $query = $insertNewKebab;

    if ($insertNewKebab) {
        echo "SENT";
        $id = $myConnection->insert_id;
        header("Location: kebab.php?id=$id");
    } else {
        echo $error;
    };

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <link />
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"/>
        <!-- Bootstrap ICONS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Isabelle's fakebab</title>
        <script src="js/main.js"></script>
        <link href="css/style.css" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-extend-lg navbar-dark bg-dark">
				<a href="index.php" class="navbar-brand">Isabelle's Fakebab</a>
				<ul>
					<li></li>
				</ul>
		</nav>

		<main>
            <div class="text-center">
                <h1>Create your own FAKEbab !</h1>
                
                <hr>
                
                    <div class="container justify-content-center d-flex">
                        <form action="<?php if ($editMode) { echo 'edit.php';} ?>" method="POST">

                            <!-- DIV RADIO MEAT -->

                            <div class="d-flex">
                                Meats:
                                <div class="container">

                                    <?php for($i = 1; $i < sizeof($meats); $i++ ) { ?>

                                    <div>
                                        <input type="radio" name="<?php echo $str_meat ?>"  value="<?= $i ?>" id="<?= $meats[$i] ?>" <?php if (isset($id) && $i == $kebab["meat"]) { echo "checked"; } ?> required>
                                        <label for="<?= $meats[$i] ?>"><?= $meats[$i] ?></label>  
                                    </div>

                                    <?php } ?>
                                        
                                    
                                </div>
                            </div>

                            <!-- END OF RADIO DIV MEAT -->

                            <!-- DIV GARNISH -->

                            <div class="d-flex mt-4">
                            Garnish:
                                <div class="container">
                                    <textarea name="garnish" id="garnish" ><?php if (isset($id)) { echo $kebab["garnish"]; } ?></textarea>
                                </div>
                            </div>

                            <!-- END OF DIV GARNISH -->

                            <!-- DIV RADIO SAUCES -->

                            <div class="d-flex pt-3">
                                Sauces:
                                <div class="container">

                                    <?php for($i = 1; $i < sizeof($sauces); $i++ ) { ?>

                                    <div>
                                        <input type="radio" name="<?php echo $str_sauce ; ?>"  value="<?= $i ?>" id="<?= $sauces[$i] ?>" <?php if (isset($id) && $i == $kebab["sauce"]) { echo "checked"; } ?> required>
                                        <label for="<?= $sauces[$i] ?>"><?= $sauces[$i] ?></label>  
                                    </div>

                                    <?php } ?>
                                        
                                    
                                </div>
                            </div>

                            <!-- END OF RADIO DIV SAUCES -->

                            <!-- DIV DIFFICULTY RANGE -->

                            <div class="d-flex">
                                Difficulty:
                                <div class="container">

                                    <span id="slider_value2" style="color:red;font-weight:bold;"></span><br>
                                    <!-- <input type="button" value="-" onClick="subtract_one()"> -->
1
                                    
                                    <input class="difficulty" type="range" min="1" max="<?= $maxDifficulty ?>" id="difficulty" step="1" <?php if (isset($id) ) { echo "selected value='" . $kebab["difficulty"] . "'"; } ?> name="difficulty" onchange="show_value2(this.value)">

                                    <script type="text/javascript">
                                        show_value2(<?php if ($editMode) { echo $kebab["difficulty"];} else { echo (int)($maxDifficulty / 2); }?>);
                                    </script>


                                    <?= $maxDifficulty ?> 

                                    <!-- <input type="button" value="+" onClick="add_one()">  -->
                                    
                                </div>
                            

                            </div>

                            <!-- END OF DIFFICULTY DIV -->

                            <button value="<?php if ($editMode) { echo $id;} ?>" type="submit" class="mt-4 btn btn-info" name="<?php if ($editMode) { echo "id"; } else { echo "create"; } ?>"><?php if ($editMode) { echo "Edit"; } else { echo "create"; } ?></button>
                            </div>
                    
                        </form>     

                        <!-- FORM END -->

                    </div>
                <hr>
            </div>
		</main>
	</body>
</html>
 