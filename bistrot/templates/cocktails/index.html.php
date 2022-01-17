<?php foreach($cocktails as $cocktail){ ?>

<div class="row mt-3 mb-3 bg-warning justify-content-center">

    <h2><?= $cocktail['name'] ?></h2>
    <img src="images/<?= $cocktail['image'] ?>" style="max-width:200px" alt="">
    <h3><strong>Ingrédients :</strong></h3>
    <p><?= $cocktail['ingredients'] ?></p>

    <a href="cocktail.php?id=<?= $cocktail['id']?>" class="btn btn-primary">Voir</a>


</div>

<?php } ?>