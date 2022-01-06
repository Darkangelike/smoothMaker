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
                <div class="container">
                    <?php if (isset($_GET["edit"]) && $_GET["edit"]) { ?> 
                        <hr>
                        <form action="/messages/message.php" style="float:right">
                            <button type="submit" name="showForm" value="<?= $id ?>" class="btn btn-primary" >
                                <i class="fas fa-edit"></i>
                            </button>
                        </form>
                        <p>
                            <b><h3 style="color:<?= $message["color"] ?>" class="mb-0 pb-0">
                            <?= $message["author"] ?>:</h3></b><br>
                            <?= $message["description"] ?>
                        </p>
                </div>
                <?php } else if (isset($_GET["showForm"]) && $_GET["showForm"]) { ?>
                    <hr>
                    <form class="mb-3 pt-3" action="/Messages/message.php" method="POST">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h1>Message edit</h1>
                            <div>
                                <input type="text" name="username" placeholder="Your name" value="<?= $message["author"] ?>">
                                <input type="color" name="color" value="<?= $message["color"] ?>">
                            </div>
                            <textarea class="mt-2 mb-3" name="message" placeholder="Your message"><?= $message["description"] ?></textarea>
                            <button class="btn btn-info" type="submit" name="editSubmitted" value="<?= $id ?>">Edit</button>
                            
                        </div>
                    </form>
            <?php } else if (isset($editSubmitted) && $editSubmitted) { ?>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <nav class="navbar m-5 p-3">
                        <p><i class="far fa-check-circle" style="color:green; font-size:20px"></i> The edition was successful!<br><br>
                        You will be redirected to the main page.</p>
                    </nav>
                </div>
              <?php 
                header("refresh:3; url=index.php");
                exit;
              } ?>
            <hr>
		</div>

		</main>

    </body>
</html>
