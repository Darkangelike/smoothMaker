<?php

$input_username = false;
if (isset($_GET["username"])) {
    $input_username = $_GET["username"];
} else { };

$input_password = false;
if (isset($_GET["password"])) {
    $input_password = $_GET["password"];
};

$input_login = false;
if (isset($_GET["login"])) {
  $input_login = true;
}

$user_hint = false;
$user_picture = false;

$users = [
    [ "username" => "Marie",
    "password" => "Overwatch",
    "picture" => "https://external-preview.redd.it/KFhkmiKGL90-tbfk6xvJghTqD1LCn_zMmrC1OBleEAo.jpg?width=640&crop=smart&auto=webp&s=fe63c4b5b3ef48c75d24c7dc683311908b18b8f7",
    "message" => "You are the boss!",
    "hint" => "<strong>Hint :</strong> One of her favourite video games."
],
    [ "username" => "Julien",
    "password" => "JavaScript",
    "message" => "Karim really drew a good pair for you.",
    "picture" => "https://m.media-amazon.com/images/I/31tfpkeODQL._AC_SY1000_.jpg",
    "hint" => "<strong>Hint :</strong> His favourite subject in this training course."
],
    [ "username" => "Florian",
    "password" => "Food",
    "picture" => "https://images.fatherly.com/wp-content/uploads/2019/11/overeatingman-header.jpg?q=65&enable=upscale&w=1200",
    "message" => "A rare historical picture of a Florian species in its natural habitat.",
    "hint" => "<strong>Hint :</strong> His favourite topic (in English)."
],
    [ "username" => "Ruben",
    "password" => "Siège",
    "picture" => "https://st.depositphotos.com/1050267/5011/i/600/depositphotos_50113137-stock-photo-golden-toilet-isolated.jpg",
    "message" => "He won Game of Thrones !",
    "hint" => "<strong>Hint :</strong> He just bought a brand new and beautiful one. (write it in French)"
], 
    [ "username" => "Bagaudin",
    "password" => "absents",
    "picture" => "./40.png",
    "message" => "",
    "hint" => "<strong>Hint :</strong> Les ... ont toujours tort."
], 
    [ "username" => "Abdel",
    "password" => "Father",
    "picture" => "https://pics.me.me/when-you-have-curly-hair-and-someone-asks-why-you-23168986.png",
    "message" => "So that is why he always wear a cap.",
    "hint" => "<strong>Hint :</strong> He became one at the beginning of the training course!<br>Congratulations! (write it in English)"
], 
    [ "username" => "Amina",
    "password" => "Covid-19",
    "picture" => "https://image.freepik.com/free-photo/scientist-woman-investigating-vaccine-cure-disease-with-tired-sick-expression_1368-101889.jpg",
    "message" => "Hopefully she is not sick with it !",
    "hint" => "<strong>Hint :</strong> Maybe she caught it..."
], 
    [ "username" => "Hedi",
    "password" => "Spider",
    "picture" => "zvmn8e2yvwh21.jpg",
    "message" => "Meet Hedi's enemy.<br>
    His true kryptonite.",
    "hint" => "<strong>Hint :</strong> He found one alive in his sandwich. (write it in English)"
], 
    [ "username" => "Gislain",
    "password" => "BN",
    "picture" => "https://static.boredpanda.com/blog/wp-content/uploads/2016/02/guy-falls-asleep-at-work-sleeping-office-prank-photoshop-21__700.jpg",
    "message" => "He said \"don't wake him\" !",
    "hint" => "<strong>Hint :</strong> The brand of a biscuit he always eats."
], 
    [ "username" => "Farid",
    "password" => "Questions",
    "picture" => "https://c.tenor.com/wLCja8tuXEsAAAAi/twist-street-bell.gif",
    "message" => "Farid's new skill soon because of Isabelle blocking his view.",
    "hint" => "<strong>Hint :</strong> He always has a lot of them to ask."
], 
    [ "username" => "Thomas",
    "password" => "Joke",
    "picture" => "https://i.pinimg.com/originals/15/af/ea/15afea74e681617563886ca88af633cd.jpg",
    "message" => "Is that the truth ?",
    "hint" => "<strong>Hint :</strong> Whenever he opens his mouth, he blurts out one. (in English)"
], 
    [ "username" => "Souleymane",
    "password" => "Basketball",
    "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgZfj6in5_Jec-58d6_4m5yDh8AWAa-aXklhu5TMdJd4gSBAUhAASysguPNOLsTTEpcj8&usqp=CAU",
    "message" => "Ain't that the truth.",
    "hint" => "<strong>Hint :</strong> He could have made a career in it."
], 
    [ "username" => "Karim",
    "password" => "Mélinda",
    "picture" => "./42.webp",
    "message" => "His favourite woman ever, we all know it !",
    "hint" => "<strong>Hint :</strong> The name of his scooter."
], 
    [ "username" => "?",
    "password" => "",
    "picture" => "",
    "message" => "",
    "hint" => "<strong>Hint :</strong>"
], 
    [ "username" => "Pierre",
    "password" => "Bon",
    "picture" => "http://sms.hypotheses.org/files/2018/01/Piratey_vector_version.svg-385x500.png",
    "message" => "His true name is Barberousse !<br> Always invading others' PCs !",
    "hint" => "<strong>Hint :</strong> Son tic de language, un mot qu'il dit souvent."
]
];

$title = 'Please sign in';
$webContent = '
<div class="card container bg-secondary" style="width: 18rem;">
<form class="text-center mt-1">
    <ul class="m-0 p-0">
        <li class="m-0 p-0"><label for="username">Username</label></li>
        <input id="username" name="username"></input>
        <li class="m-0 p-0"><label for="password">Password</label></li>
        <input id="password" class="mb-3" name="password" ></input>
        <li class="m-0 p-0"><button class="btn btn-dark" name="login" type="submit">Submit</button></li>
    
<li class="mt-3 mb-3 p-0"><button class="btn btn-info" name="hint0" value="true">Tip 1</button>
<button class="btn btn-info" name="hint1" value="true">Tip 2</button></li>
</ul>
</form>
</div>';

$hint0 = '<p class="mt-2 text-center"><strong>Username :</strong><br>Type in your name or someone else\'s.<br><strong>Password :</strong><br>Submit a wrong one first to get a hint.</p>';
$hint1 = '<p class="text-center mt-2">Mind the capital letter at the start of a word.</p>';

$errorMessage = false;
if ($input_login) {
foreach ($users as $user) {
  if (!$input_username && !$input_password) {
      $errorMessage = 'Please fill in the informations.';
    } else if ( !$input_username ) {
      $errorMessage = "Please input your username.";
    } else if (!$input_password) {
      $errorMessage =  "Please input your password.";
    } else if ($user["username"] == $input_username) { 
      if ($user["password"] == $input_password) { 
            $webContent = '';
            $user_picture = $user["picture"];
            $title = $user["message"];
            $errorMessage = false;
            break;
        } else {
          $errorMessage = "The password is incorrect.<br>";
          $user_hint = $user["hint"];
          break;
        } 
    } else if ($user["username"] != $input_username ) {
        $errorMessage ="This user does not exist.";
    }
  }
}
?>

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

<style>
    ul {
        list-style: none;
    }
    </style>
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
    <img src="<?= $user_picture ?>">
    
<?php
echo $webContent ;
if (isset ($_GET["hint0"])) {
    echo $hint0;
};
        if (isset ($_GET["hint1"])) {
    echo $hint1;
};
?>
</main>

<footer></footer>


    
</body>
</html>