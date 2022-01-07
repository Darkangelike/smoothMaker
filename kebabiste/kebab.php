<?php

require_once "logique.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebabiste</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="index.php" class="navbar-brand">Kebabiste</a>
        <ul>
            <li class="nav-item"><a class="btn btn-primary" href="createKebab.php">Create</a></li>
        </ul>
    </nav>


<div class="container">

 
    <div class="row kebab">

        <div>
                <h2><strong> Kebab <?= $kebab['garniture'] ?>  </strong></h2>
               
               <?php 
                /* if($kebab['viande'] == 1 ){
                    echo "agneau";
                }else if($kebab['viande'] == 2 ){
                            echo "veau";
                } */
               
               ?>
               
                <h3>Viande : <?= $viandes[$kebab['viande']-1] ?></h3>

                <h4>Sauce :  <?= $kebab['sauce'] ?></h4>

                <div class="row">
             
                   
                <?php for($i=0; $i<5; $i++){ ?>
                    <div class="cercle<?php if($kebab['difficulte']>$i ){echo " plein";} ?>"></div>
                <?php }?>

                </div>

        </div>


    </div>



</div>

    
  
</body>
</html>