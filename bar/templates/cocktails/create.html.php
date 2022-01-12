<?php if ($createCommentMode) { ?>

<div class="container">
    <form method="POST" action="createComment.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1>Write a new comment</h1>
            <input value="insert a famous author name here" type="text" name="author" placeholder="Your name">
            <textarea placeholder="Your comment" name="content" id="comment" cols="18" rows="3">Random comment</textarea>

            <input type="hidden" name="createComment">
            <button class="btn btn-info" type="submit" value="<?= $id ?>" name="createCommentMode">Create</button>
        </div>
    </form>
</div>

<?php } else { ?>

    <div class="container">
    <form method="POST" action="createCocktail.php">
        
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1>Add a cocktail</h1>
            <input type="text" name="name" value="Second class" placeholder="name du cocktail">
            <textarea placeholder="Ingredients" name="ingredients" id="ingredients" cols="18" rows="3">I DO NOT KNOW</textarea>
            <input placeholder="Addresse URL de l'image" value="2.png" type="text" name="image">

            <button class="btn btn-info" type="submit" name="create">Create</button>
        </div>
    </form>
</div>


<?php } ?>