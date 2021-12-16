<?php

$input_username = false;
if (isset($_GET["username"])) {
    $input_username = $_GET["username"];
} else { };

$input_password = false;
if (isset($_GET["password"])) {
    $input_password = $_GET["password"];
};

$input_login = false;
if (isset($_GET["login"])) {
  $input_login = true;
}


$users = [
    [ "username" => "Marie",
    "password" => "Overwatch"
],
    [ "username" => "Julien",
    "password" => "Audrey"
],
    [ "username" => "Florian",
    "password" => "Fromage"
],
    [ "username" => "Ruben",
    "password" => "Trône"
], 
    [ "username" => "Bagaudin",
    "password" => "Absent"
], 
    [ "username" => "Abdel",
    "password" => "Papa"
], 
    [ "username" => "Amina",
    "password" => "Covid"
], 
    [ "username" => "Hedi",
    "password" => "Araignée"
], 
    [ "username" => "Gislain",
    "password" => "BN"
], 
    [ "username" => "Farid",
    "password" => "Questions"
], 
    [ "username" => "Thomas",
    "password" => "Blagues"
], 
    [ "username" => "Souleyman",
    "password" => "Basketball"
], 
    [ "username" => "Karim",
    "password" => "Rihanna"
], 
    [ "username" => "Pierre",
    "password" => "Bon"
], 
    [ "username" => "Pierre",
    "password" => "Bon"
]
];

$title = '<div class="mt-3"><h1>Please sign in :</h1></div>';
$webContent = '
<form class="text-center mt-2">
    <ul>
        <li><label for="username">Username</label></li>
        <input id="username" name="username"></input>
        <li><label for="password">Password</label></li>
        <input id="password" class="mb-3" name="password" ></input>
        <li><button class="btn btn-dark" name="login" type="submit">Submit</button></li>
    
<li class="mt-3"><button class="btn btn-info" name="hint0" value="true">Hint 1</button>
<button class="btn btn-info" name="hint1" value="true">Hint 2</button></li>
</ul>
</form>';

$hint0 = '<p class="text-center">Username:<br>Sainte dans la classe.<br>Password :<br>Un de ses jeux vidéos prérféré.</p>';
$hint1 = '<p class="text-center">Username:<br>Le plus jeune de la classe.<br>Password:<br>Un de ses derniers achat. Version GoT.</p>';

$errorMessage = false;
if ($input_login) {
foreach ($users as $user) {

if (!$input_username && !$input_password) {
    $errorMessage = "<p>Please fill in the informations.</p>";
  } else if ( !$input_username ) {
    $errorMessage = "<p>Please input your username.</p>";
  } else if (!$input_password) {
    $errorMessage =  "<p>Please input your password.</p>";
  } else if ($user["username"] == $input_username && $user["password"] != $input_password) {  
   $errorMessage = "The password is incorrect.";
  } else if ($user["username"] == $input_username && $user["password"] == $input_password) {
      $webContent = '<div class="text-center mt-3">
      <h1>You are the boss</h1>
      <img src="https://external-preview.redd.it/KFhkmiKGL90-tbfk6xvJghTqD1LCn_zMmrC1OBleEAo.jpg?width=640&crop=smart&auto=webp&s=fe63c4b5b3ef48c75d24c7dc683311908b18b8f7">
      </div>';
      $errorMessage = false;
      $title = false;
} 



}

$title .= $errorMessage;
}


// if (!$input_username && !$input_password) {
//     $errorMessage = "<p>Please fill in the informations.</p>";
//   } else if (!$input_password) {
//     $errorMessage =  "<p>Please input your password.</p>";
//   } else if ( !$input_username ) {
//     $errorMessage = "<p>Please input your username.</p>";
//   } else if ( $user["username"] == $input_username && $user["password"] != $input_password ) {
//   $errorMessage =  "<p>Incorrect password.</p>";
//   } else if ($user["username"] != $input_username && $user["password"] != $input_password ) {
//   $errorMessage =  "<p>This user does not exist.</p>";
// } else if ($user["username"] == $input_username && $user["password"] == $input_password) {
// $webContent = '<div class="text-center mt-3">
// <h1>You are the boss</h1>
// <img src="https://external-preview.redd.it/KFhkmiKGL90-tbfk6xvJghTqD1LCn_zMmrC1OBleEAo.jpg?width=640&crop=smart&auto=webp&s=fe63c4b5b3ef48c75d24c7dc683311908b18b8f7">
// </div>';
// $errorMessage = false;
// }
// }
// } else {
//   $errorMessage = false;
// }


// if ($user["username"] == $input_username && $user["password"] == $input_password) {
// $webContent = '<div class="text-center mt-3">
// <h1>You are the boss</h1>
// <img src="https://external-preview.redd.it/KFhkmiKGL90-tbfk6xvJghTqD1LCn_zMmrC1OBleEAo.jpg?width=640&crop=smart&auto=webp&s=fe63c4b5b3ef48c75d24c7dc683311908b18b8f7">
// </div>';
// } ;
// if ( $user["username"] == $input_username && $user["password"] != $input_password ) {
//   $errorMessage = "Please input a valid password.";
// } else if ( $user["username"] != $input_username && $user["password"] == $input_password) {
//   $errorMessage = "Please input a valid username.";
//   } else if ( !$input_username && !$input_password) {
//     $errorMessage ="Please fill the informations.";
//   } else if (!$input_password) {
//     $errorMessage = "Please input your password.";
//   } else {
//     $errorMessage = "Please input your username.";
//   }
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    ul {
        list-style: none;
    }
    </style>

<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/verification/">Verification test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/verification/">Login <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>
</header>

<main class="text-center container">
<?php
echo $input_username, $input_password;
echo $title;
echo $webContent ;

if (isset ($_GET["hint0"])) {
    echo $hint0;
};
        if (isset ($_GET["hint1"])) {
    echo $hint1;
};
?>
</main>

<footer></footer>


    
</body>
</html>