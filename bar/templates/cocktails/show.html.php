 <div class="container">

    <div class="card bg-light mb-3 cocktail-card" style="max-width: 18rem;">

        <div class="card-header"><?= $cocktail["name"] ?></div>
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
                <?php $i = 0; if ($comments) { foreach($comments as $comment) { $i++; ?> 
                    <div class="card-footer text-muted">
                        <div><p class="text-left" style="font-size:10px">Comment n°<?= $i ?></p>
                        <h3><?= $comment["author"] ?></h3></div>
                        
                        <p><?= $comment["content"] ?></p>
                    </div>
                <?php } ?>
            <div class="card-footer text-muted">
                        <form action="createComment.php">
                            <button type="submit" name="id" value="<?= $cocktail["id"] ?>" class="btn btn-info">Add a comment</button> 
                        </form>
                        
                    </div>
            <?php } else { ?>
                    <div class="card-footer text-muted">
                        <form action="createComment.php">
                           <p>Be the first to comment this cocktail.</p>
                            <button type="submit" name="id" value="<?= $cocktail["id"] ?>" class="btn btn-info">Add a comment</button> 
                        </form>
                        
                    </div>
                <?php } ?>


                
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>

    
</div>
