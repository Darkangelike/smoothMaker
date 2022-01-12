<form action="editCocktail.php" method="post">


    <input type="text" name="nom" value="<?= $cocktail['name'] ?>" id="">
    <input type="text" name="image" value="<?= $cocktail['image'] ?>" id="">
    <input type="text" name="ingredients" value="<?= $cocktail['ingredients'] ?>" id="">

    <button type="submit" name="id" value="<?= $cocktail['id'] ?>" class="btn btn-success">Enregistrer</button>
</form>