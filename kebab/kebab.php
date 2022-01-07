<?php
require_once "logic.php";
require_once "ingredients.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
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
	</head>
	<body>
		<nav class="navbar navbar-extend-lg navbar-dark bg-dark">
				<a href="index.php" class="navbar-brand">Isabelle's Fakebab</a>
				<ul>
					<li></li>

				</ul>
		</nav>

		<main>
			<div class="container">
                <form style="float:right" action="create.php">
                    <button type="submit" class="btn btn-secondary" name="create" >Create your own</button>
                </form>
            </div>
			<div class="text-center">
                <h1>Kebab n°<?= $kebab["id"]; ?> </h1>
                <hr>					
                <h3>
                    <ul>
                        <li>Meat: <?= $meats[$kebab["meat"]] ?></li>
                        <li>Garnish: <?= $kebab["garnish"] ?></li>
                        <li>Sauce: <?= $sauces[$kebab["sauce"]] ?></li>
                        <li>Difficulty: <?php for($i = 0; $i < $maxDifficulty; $i++) { ?>
                            <i class="bi bi-stopwatch<?php if ($i < $kebab["difficulty"]) { ?>-fill<?php } ?>"></i>
                        <?php } ?></li>
                    </ul>                                
                </h3>
                <hr>
			</div>
		</main>
	</body>
</html>
 