<?php
require_once "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://kit.fontawesome.com/27d8ccfd65.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Messages</title>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="/messages">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
				<a class="nav-link active" href="/messages">Home
					<span class="visually-hidden">(current)</span>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
				</li>
			</ul>
			<form class="d-flex">
				<input class="form-control me-sm-2" type="text" placeholder="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form>
			</div>
		</div>
		</nav>
		
		<main>

		<div class="container mt-4">
			<nav class="navbar"><h1>Official members messages</h1></nav>

			<?php if (isset($display) && $display) { ?>

			<form class="mb-3 pt-3" action="/messages/createMessage.php" method="POST">
				<div class="d-flex flex-column align-items-center justify-content-center">
					<nav class="navbar mb-3">Your new message</nav>
					<div>
						<input type="text" name="username" placeholder="Your name">
						<input type="color" name="color">
					</div>
					<textarea class="mt-2 mb-3" name="message" placeholder="Your message"></textarea>
					<button class="btn btn-info" type="submit">Send</button>
					
				</div>
			</form>
			 <?php } else if (!isset($id)){ ?>

				<form action="index.php">
					<div class="d-flex flex-column align-items-center justify-content-center pt-4 pb-2">
						<button class="btn btn-secondary" type="submit" name="display">Write a new message</button>
					</div>
				</form>
			<?php } ?>

			<?php if (isset($messages) && $messages) {
				foreach($messages as $message) { ?>
					<hr>
					<div class="container">
						
						<form method="post" action="/messages/deleteMessage.php" style="float:right">
							<button type="submit" name="delete" value="<?= $message["id"] ?>" class="btn btn-danger" >
								<strong>X</strong>
							</button>
						</form>	
						
						<form action="/messages/editMessage.php" style="float:right">
							<button type="submit" name="edit" value="<?= $message["id"] ?>" class="btn btn-primary" >
								<i class="far fa-edit"></i>
							</button>
						</form>
						<form action="/messages/message.php" style="float:right">
							<button type="submit" name="edit" value="<?= $message["id"] ?>" class="btn btn-primary" >
								<i class="far fa-eye"></i>
							</button>
						</form>
						<p>
							<b><h3 style="color:<?= $message["color"] ?>" class="mb-0 pb-0">
							<?= $message["author"] ?>:</h3></b><br>
							<?= strip_tags($message["description"]) ?>
						</p>
					</div>
				<?php }
			} else { ?>

				<hr>
					<div class="container">
				
							
							<form action="/messages/index.php" style="float:right">
								<button type="submit" name="edit" value="<?= $id ?>" class="btn btn-primary" >
									<i class="fas fa-edit"></i>
								</button>
							</form>

							<form method="post" action="/messages/deleteMessage.php" style="float:right">
								<button type="submit" name="delete" value="<?= $id ?>" class="btn btn-danger" >
									<strong>X</strong>
								</button>
							</form>
							<p>
								<b><h3 style="color:<?= $message["color"] ?>" class="mb-0 pb-0">
								<?= $message["author"] ?>:</h3></b><br>
								<?= strip_tags($message["description"]) ?>
							</p>
					</div>
				<hr>

			<?php } ?>

		</div>

		</main>

    </body>
</html>
