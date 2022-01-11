<div class="container d-flex flex-wrap">
    <?php foreach($cocktails as $cocktail) { ?>

        <div>
            <form>
                
            </form>
        </div>
        <div>
            <form>

            </form>
        </div>
    
    <div class="cocktail-card">
        <H1><?= $cocktail["nom"] ?></H1>
        <img src="images/<?= $cocktail["image"] ?>"/>
        <h3>Ingredients:</h3>
        <p><?= $cocktail["ingredients"] ?></p>
    </div>
    <?php } ?>
</div>

