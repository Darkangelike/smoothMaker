


<h1><?= $cocktail['name'] ?></h1>
<p><strong>Ingredients : </strong><?= $cocktail['ingredients'] ?></p>

<img src="images/<?= $cocktail['image'] ?>" alt="">

<form action="deleteCocktail.php" method="post">
    <button class="btn btn-danger" type="submit" name="id" value="<?= $cocktail['id'] ?>">Supprimer</button>
</form>

<a href="editCocktail.php?id=<?= $cocktail['id'] ?>" class="btn btn-warning">modifier</a>