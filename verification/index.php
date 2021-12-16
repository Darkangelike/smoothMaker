<?php include_once "logical.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/verification/">Verification test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/verification/">Login <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
</header>

<main class="text-center container">
    <h1 class="mt-3"><?= $title ?></h1>
    <p class="pb-0 mb-0" style="color: red"><?= $errorMessage ?></p>
    <p class="pb-0 mb-0"><?= $user_hint ?></p>
    <?php if ($user_audio) {
    echo ' <iframe src="silence.mp3" allow="autoplay" id="audio" style="display: none"></iframe>
    <audio autoplay controls>
  <source src="23ttsMP3.com_VoiceText_2021-12-16_15 38 16.mp3" type="audio/mpeg">
  <source src="23ttsMP3.com_VoiceText_2021-12-16_15 38 16.mp3" type="audio/wav">
</audio>';
} ?>
    <img style="max-width : 100%" src="<?= $user_picture ?>">
    
<?php
echo $webContent ;
if (isset ($_POST["hint0"])) {
    echo $hint0;
};
        if (isset ($_POST["hint1"])) {
    echo $hint1;
};
?>
</main>
<footer></footer>
</body>
</html>