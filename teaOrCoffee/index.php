<?php
require_once "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- CSS only -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tea of coffee ?</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav class="navbar navbar-expand navbar-dark bg-dark">
			<a href="/teaOrCoffee" class="navbar-brand">Tea or Coffee ?</a>
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a href="http://localhost/teaOrCoffee/?drink=tea" class="navbar-brand nav-link active">Tea</a>
				</li>
				<li class="nav-item">
					<a href="http://localhost/teaOrCoffee/?drink=coffee" class="navbar
					-brand nav-link active">coffee</a>
				</li>
				<?php
				if ($_SESSION["isConnected"] == true) {?>
				<li class="nav-item">
					<a href="http://localhost/teaOrCoffee/?drink=soju" class="navbar-brand nav-link active">소주</a>
				</li>
				<li class="nav-item">
					<form method="POST">
						<input type="submit" name="logout" class="navbar-brand bg-danger" value="logout"/>
					</form>
				</li>
				<?php } else { ?>
				<li class="nav-item">
				<form method="POST">
					<input type="text" name="login" placeholder="Type your password here">
					<input type="submit" value="Log in">
				</form>
				</li>
				<?php } ?>
			</ul>
		</nav>
			<div class="row">
				<?= $pageContent ?>
				<?= $host ?>
			</div>
	</body>
</html>
