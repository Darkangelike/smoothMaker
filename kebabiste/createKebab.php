<?php

require_once "db.php";

$modeEdition = false;

if(
    !empty($_GET['id']) && ctype_digit($_GET['id'])
    && isset($_GET['edition'])

){
    require_once "logique.php";
    $modeEdition = true;
}


// logique de traitement de la creation et enregistrement d'un nouveau kebab
//var_dump($_POST);
if(

        !empty($_POST['viande']) && ctype_digit($_POST['viande'])
        && !empty($_POST['garniture'])
        && !empty($_POST['sauce']) && ctype_digit($_POST['sauce'])
        && !empty($_POST['difficulte']) && ctype_digit($_POST['difficulte'])
)
{

$viandeStr = $_POST['viande'];
$garnitureStr = $_POST['garniture'];
$sauceStr = $_POST['sauce'];
$difficulteStr = $_POST['difficulte'];

//var_dump($sauce);

$viande = (int)$viandeStr;    
$sauce = (int)$sauceStr;    
$difficulte = (int)$difficulteStr;   
$garniture = htmlspecialchars($garnitureStr);



$sql = "INSERT INTO kebabs(viande, garniture, sauce, difficulte) 
VALUES ('$viande', '$garniture', '$sauce', '$difficulte')";

$resultat = mysqli_query($connexion, $sql); 

var_dump(mysqli_error($connexion));
$id = $connexion->insert_id;


header("Location: kebab.php?id=$id");

}

//une fois le kebab sauvegardé , on est redirigé vers la page individuelle du 
//nouveau kebab


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


        <form method="post">

            <div class="form-group">
            <select value="3" name="viande" class="form-select" >
                <?php if($modeEdition){ ?>

                    <option value="<?= $kebab['viande'] ?>"><?= $viandes[$kebab['viande']-1] ?></option>

                    <? }else{?>
                <option >Selectionnez une viande</option>

                <?php } ?>
                <option value="1">Agneau</option>
                <option value="2">Veau</option>
                <option value="3">Dinde</option>
            </select>

            </div>

          
             <textarea 
             name="garniture"cols="30" 
             rows="10" 
             placeholder="Votre garniture"><?php if($modeEdition){echo $kebab['garniture'];} ?></textarea>
            
             <div class="form-group">
                    <select name="sauce" class="form-select" aria-label="Default select example">
                    <?php if($modeEdition){ ?>

<option value="<?= $kebab['sauce'] ?>"><?= $sauces[$kebab['sauce']-1] ?></option>

<? }else{?>
<option >Selectionnez une viande</option>

<?php } ?>
                        <option value="1">Blanche</option>
                        <option value="2">Harissa</option>
                        <option value="3">Moutarde</option>
                    </select>

            </div>

            <div class="form-group">
                    <select name="difficulte" class="form-select" aria-label="Default select example">
                    <?php if($modeEdition){ ?>

<option value="<?= $kebab['difficulte'] ?>"><?= $kebab['difficulte'] ?></option>

<? }else{?>
<option >Selectionnez une viande</option>

<?php } ?>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

            </div>

            <button type="submit" class="btn btn-success">Enregistrer</button>


        </form>



</div>

    
  
</body>
</html>