<?php

require_once "db.php";
require_once "logic.php";

if (isset($_GET["edit"]) && $_GET["edit"]) {
    $id = htmlspecialchars($_GET["edit"]);

    $request = "SELECT messages.author, messages.description, messages.color FROM messages where id=" . $id;


    $result = mysqli_query($myConnection, $request);

    $message = $result->fetch_assoc();
    var_dump($message);
    // echo "<br>";
    // var_dump(get_object_vars($message));
    // echo "<br>";
    // $message = (array) $message;
    // var_dump($message);
    // echo $message["author"];
}

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
                <div class="d-flex flex-column align-items-center justify-content-center"><nav class="navbar"><h1>Message to edit</h1></nav></div>
			    <h1><? $message["author"] ?></h1>
            </div>
        </main>
</body>
</html>

