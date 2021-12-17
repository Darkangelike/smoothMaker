<?php 

// include_once "../htdocs/verification/logical.php";

$eau = false;
if (isset ($_GET["eau"])) {
  $eau = $_GET["eau"];
}

$isConnected = false;

$users = [
  [],
  [],
];

$fish = [
[
    "nom"=>"Yellow",
    "description"=>"A lively fish found in the sea.",
    "prix"=>12,
    "image"=>"https://gallery.yopriceville.com/var/resizes/Free-Clipart-Pictures/Underwater/Yellow_Fish_PNG_Clipart.png?m=1557962098",
    "eau" => "mer",
    "isProtected" => false
  ],
[
  "nom"=>"Blue",
  "description"=>"Dory wannabe.",
  "prix"=>15,
  "image"=>"https://pics.clipartpng.com/midle/Blue_Fish_PNG_Clipart-426.png",
  "eau" => "mer",
    "isProtected" => false],
[
  "nom"=>"Green",
  "description"=>"Very rare fish, perfect for kids' as a first pet.",
  "prix"=>25,
  "image"=>"https://i.pinimg.com/originals/0d/41/40/0d414090aea08ab3db86516d57d09022.jpg",
  "eau" => "douce",
    "isProtected" => false],
[
  "nom"=>"Orange Roughy",
  "description"=>"Deep sea fish which has an exceptionally long lifespan, which can go beyond 140 years old.",
  "prix"=>5,
  "image"=>"https://media.hswstatic.com/eyJidWNrZXQiOiJjb250ZW50Lmhzd3N0YXRpYy5jb20iLCJrZXkiOiJnaWZcL3RvcC0xMC1tb3N0LWVuZGFuZ2VyZWQtZmlzaDQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjoyOTB9LCJ0b0Zvcm1hdCI6ImF2aWYifX0=",
  "eau" => "douce",
    "isProtected" => true],
[
  "nom"=>"Black",
  "description"=>"Do you think a black fish means bad luck the same as black cats do ?",
  "prix"=>10,
  "image"=>"https://www.fishkeepingworld.com/wp-content/uploads/2019/08/Black-Moor-Goldfish-Care.jpg?ezimgfmt=ng:webp/ngcb10",
    "eau" => "douce",
    "isProtected" => false],
[
  "nom"=>"Alosa alosa",
  "description"=>"A fish which can live in both clear and salt water.",
  "prix"=>10,
  "image"=>"https://inpn.mnhn.fr/photos/uploads/webtofs/inpn/9/174829.jpg",
    "eau" => "",
    "isProtected" => false
    ]
];

$pageContent = '';

foreach ($fish as $aFish) {
  
    $fishCard = "<div class='card bg-light mb-3 ml-3 mr-3' name='{$aFish['eau']}' style='max-width: 20rem;'>
            <div class='card-header text-center'>{$aFish['nom']}</div>
            <div class='card-body'>
                <div style='height: 250px' class='d-flex align-center'><img class='card-img-top' src='{$aFish['image']}' alt='Card image cap'></div>
                <h4 class='card-title'>{$aFish['prix']}€</h4>
                <p class='card-text'>{$aFish['description']}</p>
            </div>
            </div>";
        
           if (
             (!$eau || $aFish["eau"] == $eau || $aFish["eau"] == "" ) &&
             (!$aFish["isProtected"] || $isConnected )) {
             $pageContent .= $fishCard;
           }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <!-- CSS only -->
<link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand randomColor" href="/hb/Fish/">The fishy place</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/hb/Fish/">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hb/Fish/">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hb/Fish/">About</a>
        </li>
        <li>
          <form>
          <input id="username" placeholder="Username"name="username"></input>
          <input id="password" placeholder="Password"name="password" ></input>
          <button class="btn btn-dark" name="login" type="submit">Submit</button>
        </form>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">

        <a class="nav-link" href="?eau=douce">Eau douce</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?eau=mer">Eau de mer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/hb/Fish/">All</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="card-group d-flex flex-wrap">
  
              <?php 
              echo $pageContent;
              ?>
</div>