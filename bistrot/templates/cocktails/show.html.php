


<h1><?= $cocktail['name'] ?></h1>
<p><strong>Ingredients : </strong><?= $cocktail['ingredients'] ?></p>

<img src="images/<?= $cocktail['image'] ?>" alt="">

<form action="deleteCocktail.php" method="post">
    <button class="btn btn-danger" type="submit" name="id" value="<?= $cocktail['id'] ?>">Supprimer</button>
</form>

<a href="editCocktail.php?id=<?= $cocktail['id'] ?>" class="btn btn-warning">modifier</a>

<form class="ms-5" action="createComment.php" method="post">
    <div class="form-group"><input placeholder="Votre nom"  type="text" name="author" id=""></div>
    <div class="form-group"><textarea placeholder="Votre commentaire" type="text" name="content" id=""></textarea></div>
    <div class="form-group"><button name='cocktailId' value="<?= $cocktail['id'] ?>" class="btn btn-success">Poster</button></div>
</form>


<?php foreach($commentaires as $commentaire) : ?>
            <div class="row bg-success mt-2 mb-2">
                <h3>
                    <p><strong><?= $commentaire['author'] ?></strong></p>
                </h3>
                <p class="ms-5" ><?= $commentaire['content'] ?></p>

            <form action="deleteComment.php" method="post"><button type="submit" class="btn btn-danger" name="id" value="<?= $commentaire['id']?>">Supprimer</button></form>
            </div>
<?php endforeach ?>

<?php if(!$commentaires){?>
   <h2>Soyez le premier à commenter le <?= $cocktail['name'] ?>  !!</h2>
<?php } ?>