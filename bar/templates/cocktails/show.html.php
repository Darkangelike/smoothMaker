 <div class="container">
    <div class="cocktail-card">
            <form action="deleteCocktail.php?id=<?= $cocktail["id"] ?>" method="POST">
                <button value="<?= $cocktail["id"] ?>" name="id" style="float:right" type="submit" class="btn btn-danger">X</button>
            </form>
            
            <form action="editCocktail.php">
                <button value="<?= $cocktail["id"] ?>" name="edit" style="float:right" type="submit" class="btn btn-info">Edit</button>
            </form>
        
        <H1><?= $cocktail["nom"] ?></H1>
        <img src="images/<?= $cocktail["image"] ?>"/>
        <h3>Ingredients:</h3>
        <p><?= $cocktail["ingredients"] ?></p>

    </div>
</div>