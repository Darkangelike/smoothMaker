<?php

$isConnected = false;

// session_unset();
// unset($_SESSION["username"]);
// unset($_SESSION["isConnected"]);
// $isConnected = false;

// if (isset($_POST["logout"])) {

//     unset($_SESSION["username"]);
//     unset($_SESSION["isConnected"]);
//     $isConnected = false;
// }


// if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"]) {
//     $isConnected = true;
// }

$salt = "Chaeyoung";

if (isset($_POST["logout"])) {
    session_unset();
}

$input_login = false;
if (isset($_POST["login"])) {
  $input_login = true;
}

$user_hint = false;
$user_picture = false;
$user_audio = false;

$logoutButton = '<form method="post"><button class="btn btn-warning" name="logout" type="submit">Logout</button></form>';

$users = [
    [ "username" => "Marie",
    "password" => md5("Overwatch".$salt),
    "picture" => "https://ae01.alicdn.com/kf/H2a636fbc1d184f5bae46cf7c4080202cW/TOYSDAO-TDA-04-1-6-Female-Ninja-Costume-Set-Black-for-12-inch-action-figure-body.jpg_Q90.jpg_.webp",
    "message" => "At night comes Marie's true form!",
    "hint" => "<strong>Hint :</strong> One of her favourite video games."
],
    [ "username" => "Julien",
    "password" => md5("JavaScript".$salt),
    "message" => "Karim really drew a good pair for you.",
    "picture" => "https://m.media-amazon.com/images/I/31tfpkeODQL._AC_SY1000_.jpg",
    "hint" => "<strong>Hint :</strong> His favourite subject in this training course."
],
    [ "username" => "Florian",
    "password" => md5("Food".$salt),
    "picture" => "https://images.fatherly.com/wp-content/uploads/2019/11/overeatingman-header.jpg?q=65&enable=upscale&w=1200",
    "message" => "A rare historical picture of a Florian species in its natural habitat.",
    "hint" => "<strong>Hint :</strong> His favourite topic (in English)."
],
    [ "username" => "Ruben",
    "password" => md5("Siège".$salt),
    "picture" => "https://st.depositphotos.com/1050267/5011/i/600/depositphotos_50113137-stock-photo-golden-toilet-isolated.jpg",
    "message" => "He won Game of Thrones !",
    "hint" => "<strong>Hint :</strong> He just bought a brand new and beautiful one. (write it in French)"
], 
    [ "username" => "Bagaudin",
    "password" => md5("absents".$salt),
    "picture" => "./40.png",
    "message" => "",
    "hint" => "<strong>Hint :</strong> Fill in the blanks in this sentence below. (in French)<br>Les ... ont toujours tort."
], 
    [ "username" => "Abdel",
    "password" => md5("Father".$salt),
    "picture" => "https://pics.me.me/when-you-have-curly-hair-and-someone-asks-why-you-23168986.png",
    "message" => "So that is why he always wear a cap.",
    "hint" => "<strong>Hint :</strong> He became one at the beginning of the training course!<br>Congratulations! (write it in English)"
], 
    [ "username" => "Amina",
    "password" => md5("Covid-19".$salt),
    "picture" => "https://image.freepik.com/free-photo/scientist-woman-investigating-vaccine-cure-disease-with-tired-sick-expression_1368-101889.jpg",
    "message" => "Hopefully she is not sick with it !",
    "hint" => "<strong>Hint :</strong> Maybe she caught it..."
], 
    [ "username" => "Hedi",
    "password" => md5("Spider".$salt),
    "picture" => "zvmn8e2yvwh21.jpg",
    "message" => "Meet Hedi's enemy.<br>
    His true kryptonite.",
    "hint" => "<strong>Hint :</strong> He found one alive in his sandwich. (write it in English)"
], 
    [ "username" => "Gislain",
    "password" => md5("BN".$salt),
    "picture" => "https://static.boredpanda.com/blog/wp-content/uploads/2016/02/guy-falls-asleep-at-work-sleeping-office-prank-photoshop-21__700.jpg",
    "message" => "He said \"don't wake him\" !",
    "hint" => "<strong>Hint :</strong> The brand of a biscuit he always eats."
], 
    [ "username" => "Farid",
    "password" => md5("Questions".$salt),
    "picture" => "https://c.tenor.com/wLCja8tuXEsAAAAi/twist-street-bell.gif",
    "message" => "Farid's new skill soon because of Isabelle blocking his view.",
    "hint" => "<strong>Hint :</strong> He always has a lot of them to ask."
], 
    [ "username" => "Thomas",
    "password" => md5("Joke".$salt),
    "picture" => "https://i.pinimg.com/originals/15/af/ea/15afea74e681617563886ca88af633cd.jpg",
    "message" => "Is that the truth ?",
    "hint" => "<strong>Hint :</strong> Whenever he opens his mouth, he blurts out one. (in English)"
], 
    [ "username" => "Souleymane",
    "password" => md5("Basketball".$salt),
    "picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgZfj6in5_Jec-58d6_4m5yDh8AWAa-aXklhu5TMdJd4gSBAUhAASysguPNOLsTTEpcj8&usqp=CAU",
    "message" => "Ain't that the truth.",
    "hint" => "<strong>Hint :</strong> He could have made a career in it."
], 
    [ "username" => "Karim",
    "password" => md5("Mélinda".$salt),
    "picture" => "./42.webp",
    "message" => "His favourite woman ever, we all know it !",
    "hint" => "<strong>Hint :</strong> The name of his scooter."
], 
    [ "username" => "Laurent",
    "password" => md5("Malinois".$salt),
    "picture" => "https://www.neuralsoftsolutions.com/wp-content/uploads/2019/08/190828-Apple-tease_oypn8z.gif",
    "message" => "Bot bot bot.",
    "audio" => "23ttsMP3.com_VoiceText_2021-12-16_15 38 16.mp3",
    "hint" => "<strong>Hint :</strong> His dog's breed."
], 
    [ "username" => "Pierre",
    "password" => md5("Unicorn".$salt),
    "picture" => "http://sms.hypotheses.org/files/2018/01/Piratey_vector_version.svg-385x500.png",
    "message" => "His true name is Barberousse !<br> Always invading others' PCs !",
    "hint" => "<strong>Hint :</strong> An animal he loves. (in English)"
],
    [ "username" => "Isabelle",
    "password" => md5("Mask".$salt),
    "picture" => "https://i.pinimg.com/originals/83/14/60/831460c2e2106c0bbaf1c4a87a9e8f66.jpg",
    "message" => "Isabelle at the end of the year.",
    "hint" => "<strong>Hint :</strong> She always has it on. (in English)"
]
];

$errorMessage = false;
if ($input_login) {
    if (isset($_POST['username'])
    &&
    isset($_POST['password'])) { 
        if (!$input_username && !$input_password) {
            $errorMessage = 'Please fill in the informations.';
            } else if ( !$input_username ) {
            $errorMessage = "Please input your username.";
            } else if (!$input_password) {
            $errorMessage =  "Please input your password.";
            } else {
                $userExists = false;
                foreach ($users as $user) {
                    if ($user["username"] == $input_username) { 
                        $userExists = true;
                        if ($userExists) {
                            if ($user["password"] == $input_password) { 
                                $webContent = '';
                                $user_picture = $user["picture"];
                                $title = $user["message"];
                                $errorMessage = false;
                                $isConnected = true;
                                $_SESSION["username"] = $input_username;
                                $_SESSION["isConnected"] = $isConnected;
                                if ($user["username"] == "Laurent") {
                                    $user_audio = true;
                                }
                            } else {
                                $errorMessage = "The password is incorrect.<br>";
                                $user_hint = $user["hint"];
                            }
                        }
                } 
                // else {
                //     $errorMessage ="This user does not exist.";
                // }
            }
        }
    }
}

?>