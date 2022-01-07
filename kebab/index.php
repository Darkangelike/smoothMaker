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
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Isabelle's fakebab</title>
	</head>
	<body>
		<nav class="navbar navbar-extend-lg navbar-dark bg-dark">
				<a href="#" class="navbar-brand">Isabelle's Fakebab</a>
				<ul>
					<li></li>

				</ul>
		</nav>

		<main>
			<div class="container"></div>
				<div class="text-center">
					<h1>List of fakebabs</h1>
					<hr>
					<!-- kebab + meat name + garnish name + sauce name + (difficulty)  -->


					<?php foreach($kebabs as $kebab) { ?>
					<h3><?= $meat[$kebab["meat"]] ?> + <?= $kebab["garnish"] ?> + <?= $sauce[$kebab["sauce"]] ?> + <?= $kebab["difficulty"] ?></h3>
					<p>A kebab that lacks inspiration</p>
					
					<hr>
					<?php } ?>


				</div>
				

		</main>
	</body>
</html>

<?php /* foreach($kebabs as $kebab) { ?>
					<h3><?= $meat[$kebab["meat"]] ?>
					  +
					 <?= $kebab["garnish"] ?>
					  + 
					  <?= $sauce[$kebab["sauce"]] ?>
					   + 
					   <?= $kebab["difficulty"] ?>
					</h3>
					<p>A kebab that lacks inspiration</p>
					<hr>
					<?php } */ ?> 