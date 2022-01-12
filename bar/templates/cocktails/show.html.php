 <div class="container">
    

    <div class="card bg-light mb-3 cocktail-card" style="max-width: 18rem;">

  

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
                
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    
</div>
