<div class="card-group justify-content-center">
    <?php foreach($cocktails as $cocktail) { ?>

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

        <H1><?= $cocktail["name"] ?></H1>
        <img src="images/<?= $cocktail["image"] ?>"/>
        <h3>Ingredients:</h3>
        <p><?= $cocktail["ingredients"] ?></p>
    </div>

    <?php } ?>
</div>

