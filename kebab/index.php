<?php
require_once "logic.php";
require_once "ingredients.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://kit.fontawesome.com/27d8ccfd65.js" crossorigin="anonymous"></script>
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
			<div class="container text-center">
				<div class="container">
					<form action="create.php" style="float:right">
						<button type="submit" class="btn btn-secondary">Create your own</button>
					</form>
				</div>					
							
				<div class="container">
					<h1>List of fakebabs</h1>
					<hr>

					<!-- LOOP ON KEBABS VARIABLE TAKEN FROM DB -->
					
					<?php  foreach($kebabs as $kebab) { ?>
						
					<!-- BUTTONS CONTAINER -->
					<div class="container">

						<!-- DELETE BUTTON -->

						<form action="delete.php" method="post">
							<button style="float:right" class="btn btn-danger" type="submit" value="<?= $kebab["id"] ?>" name="delete">X</button>
						</form>

						<!-- EDIT BUTTON -->

						<form action="create.php" style="float:right">
							<button type="submit" name="id" value="<?= $kebab["id"] ?>" class="btn btn-primary" >
								<i class="far fa-edit m-0 p-0"></i>
							</button>
						</form>

					</div>

					<h3><?= $meats[$kebab["meat"]] ?>
					+
					<?= $kebab["garnish"] ?>
					+ 
					<?= $sauces[$kebab["sauce"]] ?>
					+ 
					<?php for($i = 0; $i < $maxDifficulty; $i++) { ?>
						<i class="bi bi-stopwatch<?php if ($i < $kebab["difficulty"]) { ?>-fill<?php } ?>"></i>
					<?php } ?>
						
					</h3>
					<p>A kebab that lacks inspiration</p>
					<form action="kebab.php">
						<button type="submit" class="btn btn-info" name="id" value="<?= $kebab["id"] ?>">See more information</button>
					</form>
					<hr>
					<?php }  ?>

					<!-- END OF KEBABS LOOP -->


				</div>
			</div>
		</main>
	</body>
</html>
 