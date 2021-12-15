<?php

if(isset ($_GET["name"])) {
	$_GET["name"] = $_GET["name"];
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- CSS only -->
		<link
			href="https://bootswatch.com/5/flatly/bootstrap.min.css"
			rel="stylesheet"
		/>
		<title>Name</title>
	</head>
	<body>
		<header class="mb-5">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
				<div class="container-fluid">
					<a class="navbar-brand randomColor" href="/mina">Calling you</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarColor01"
						aria-controls="navbarColor01"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav me-auto">
							<li class="nav-item">
								<a class="nav-link active" href="/mina">
									Home
									<span class="visually-hidden">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
							</li>
						</ul>
						<form class="d-flex">
							<input
								class="form-control me-sm-2"
								type="text"
								placeholder="Search"
							/>
							<button class="btn btn-secondary my-2 my-sm-0" type="submit">
								Search
							</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
		<main>
			<form class="text-center" method="get" action="index.php">
				<label for="name">Name: </label>
				<input type="text" id="name" name="name"/>
				<button value="display name" name="submit1">Send</button>
			</form>

			<h1 class="text-center">
			<?php 
			if ($_GET) {
				echo '<h1>Hello ', $_GET["name"], '</h1>' ;
			};
				?>
				</h1>
		</main>
	</body>
</html>
