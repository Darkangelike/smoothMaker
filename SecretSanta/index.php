<?php 

$pwd = 'Twice';

$secret = '<style>
body {
    background-image : url("https://imagejournal.org/wp-content/uploads/2017/03/confetti-png-picture1200.png")
}
</style><div class="text-center mt-5"><h2 class="text-center">당신은 멋있고 최고다 !<br></h2>
            <img src="https://cdn.crowdpic.net/list-thumb/thumb_l_45DE41457EE4D68C916189DB126EC6B8.jpg"/>
            </div>';

if ((isset ($_GET["pwd"])) && $pwd == $_GET["pwd"]) {
$modeRevelation = true;
} else ( $modeRevelation = false );




$pageContent = '<form class="text-center">
<div>
<label for="pwd">Password</label>
<input type="text" id="pwd" name="pwd">
<button class="btn btn-success">Guess</button></div>
<div class="form-group">
<button class="btn text-center btn-info" name="hint0" value="true">Hint 1</button>
<button class="btn text-center btn-info" name="hint1" value="true">Hint 2</button>
<button class="btn text-center btn-info" name="hint2" value="true">Hint 3</button>
<button class="btn text-center btn-info" name="hint3" value="true">Hint 4</button></div>
</form>';

$hint2 = '<p class="text-center">English word.</p>';
$hint0 = '<p class="text-center">K-Pop.</p>';
$hint1 = '<p class="text-center">Girl Group.</p>';
$hint3 = '<p class="text-center">Won best girl group of the year at MAMA 2021.</p>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Santa</title>
</head>
<body>
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/SecretSanta/">2021's Secret Santa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/SecretSanta/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/SecretSanta/">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/SecretSanta/">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/SecretSanta/">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <main>
        <?php 
        if ($modeRevelation)
        {echo $secret;}
        else { echo $pageContent;}
        if (isset ($_GET["hint0"])) {
    echo $hint0;
};
        if (isset ($_GET["hint1"])) {
    echo $hint1;
};
if (isset ($_GET["hint2"])) {
    echo $hint2;
};
if (isset ($_GET["hint3"])) {
    echo $hint3;
};
          ;
         ?>
    </main>
</body>
</html>