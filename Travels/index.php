<?php
require_once "php\logic.php";

if ($test) {
	echo "YAY";
};
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Travels</title>
		<!-- <link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/base.css" /> -->
		<!-- CSS only -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<header>
			<nav
				class="navbar navbar-expand-lg navbar-expand bg-light navbar-primary d-flex align-items-center"
			>
				<a href="#" class="navbar-brand">Travel2000</a>
				<ul class="navbar-nav me-auto d-flex align-items-center">
					<li>
						<a class="nav-item navbar-brand nav-link active" href="#">Trips</a>
					</li>

						<?php if ($isConnected == false) { ?>

							<li>
								<form method="POST">
									<input placeholder="Username" type="text" name="username" id="username"/>
									<input placeholder="Password" type="password" name="password" id="password"/>
									<input  class="bg-primary" type="submit" name="login" value="login">
								</form>
							</li>
						<?php } else {  ?>
							<li>
								<?= $username ?> is connected
							</li>
							<li>
								<img class="blue" src="images/membericon.png" alt="">
							</li>
							<li>
								<img class="green" src="images/greendot.jpg" alt="">
							</li>
							<li>
								<form action="/Travels/index.php">
									<button type="submit" name="logout" id="logout" class="bg-danger">Log Out</button>
								</form>
						</li>
							<?php } ?>
						
				</ul>
			</nav>
		</header>
		<main>
			<div class="row d-flex justify-content-center">
				<?php foreach ($voyages as $voyage) {  ?>
					<div style="background-image:url('<?= $voyage["image"] ?>'); background-" class="col-md-10 mt-3">
						<h1 style="color: black"><?= $voyage["country"] ?></h1>
						<div class="text text-center" >
							
							<?php if ($isConnected) { ?>

								<p class="text-center" style="color:white"><s>
									
								<?= $voyage["price"] ?>
							
								</s><br>
								<span style="color: red; font-size:25px">
								
								<?= ($voyage["price"] * 0.8) ?>

							</span>

							<?php } else { ?>

								<p class="text-center" style="color: white">
								<span style="color: red; font-size:25px">

							<?= $voyage["price"] ?>

								</span>

								<?php } ?>

							<br>
							
							<?= $voyage["persons"] ?>
							persons<br>
							<?= $voyage["duration"] ?>
							days</p>
						</div>
							<form action="">
								<input type="submit" style="float:right">
							</form>
						</div>
					<?php } ?>
			</div>
		</main>

		<footer>

		</footer>
	</body>
</html>

