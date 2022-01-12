<!-- Old looped card -->

<div class="cocktail-card m-4">

            <form action="deleteCocktail.php" method="POST">
                <button value="<?= $cocktail["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            <form action="editCocktail.php">
                <button value="<?= $cocktail["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
    
            <form action="cocktail.php">
                <button value="<?= $cocktail["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-info">View</button>
            </form>
            

        <H1><?= $cocktail["nom"] ?></H1>
        <img src="images/<?= $cocktail["image"] ?>"/>
        <h3>Ingredients:</h3>
        <p><?= $cocktail["ingredients"] ?></p>
    </div>

    <!-- End of looped card -->

    <!-- Trying to make new card group -->

        
        <div class="card" style="max-width: 18rem;">

            <div class="card-header"><?= $cocktail["nom"] ?></div>
                <div class="card-body">

                    <form action="deleteCocktail.php?id=<?= $cocktail["id"] ?>" method="POST">
                        <button value="<?= $cocktail["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
                    </form>

                    <form action="editCocktail.php">
                        <button value="<?= $cocktail["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
                    </form>

                    <img src="images/<?= $cocktail["image"] ?>"/>
                    <h3>Ingredients:</h3>
                    <p class="card-text"><?= $cocktail["ingredients"] ?></p>
                    
                    <a href="cocktail.php?id=<?= $cocktail["id"] ?>" class="btn btn-primary">See more</a>
                </div>
            </div>
        </div>

<!-- End of new card group card -->


<!-- Alert message if delete unsuccessful -->

<div class="alert alert-warning alert-dismissible fade <?php if($_GET['info']=='errDel'){ echo"show";}?>" role="alert">
  <strong>Erreur</strong> Je n'ai pas pu supprimer ce cocktail car il n'existe pas, petit malin.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Second version -->

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- End of alert message -->