<?php  

if (isset($_GET["username"]) && !$_GET["username"]) {
    $input_username = true;
}
if (isset($_GET["password"]) && !$_GET["password"]) {
    $input_password = true;
}

$isConnected = false;

$webContent = "";
$form = '<div class="card container text-white text-center bg-dark mt-3" style="max-width: 400px">
            <h1 class="text-white">Log in</h1>
                <form class="text-center">
                    <ul style="list-style: none; margin: 0; padding: 0;">
                        <li><label for="username">Username:</label></li>
                        <li><input type="text" name="username" id="username"></li>
                        <li><label for="password">Password:</label></li>
                        <li><input type="text" name="password" id="password"></li>
                        <li class="mt-3 mb-3"><input type="submit" value="Log in"></li>
                </form>
        </div>';

$users = [
    ["username" => "Nicolas",
    "password" => password_hash("Git", PASSWORD_DEFAULT)],
    ["username" => "Pierre",
    "password" => "Linux"],
    ["username" => "Pierre",
    "password" => "PHP"],
    ["username" => "Audrey",
    "password" => "JavaScript"],
    ["username" => "Nicolas",
    "password" => "Angular"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://bootswatch.com/5/morph/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash it</title>
</head>
<body>
    <header>
        

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/hash/">Hash it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/hash/">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hash/">About</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>   
    <main>
        <?php if (!$isConnected) {
            echo $form;
        } else { echo "Hello ";
        }
            ?>
    </main>
    <footer>

    </footer>

</body>
</html>