<?php 
session_start();
// unset($_SESSION['isConnected']);
unset($_SESSION["username"]);
// session_unset();
include_once "./authentification.php";
include_once "./fish.php";
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
  <?php
    if ($isConnected) { 
      echo $_SESSION["username"], " is connected : ", var_dump($isConnected);
    }
  ?>
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
        <li class="align-self-center">
          
          <form method="post">
            <?php
          if (!$isConnected) {
            echo '<input id="username" placeholder="Username"name="username"></input>
          <input id="password" placeholder="Password"name="password" ></input>
          <button class="btn btn-success" name="login" type="submit">Submit</button>
          </form>
        ';
          }
          ?>
          <li class=" nav-item" style="color: orange">
        <?= $errorMessage; ?>
        <?php
        if($isConnected) {
          echo "(", $_SESSION["username"], ")";
          unset($_SESSION["isConnected"]) ;
          echo $logoutButton ;
        }
          ?>
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