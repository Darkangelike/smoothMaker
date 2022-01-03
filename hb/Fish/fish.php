<?php 


$eau = false;
if (isset ($_GET["eau"])) {
  $eau = $_GET["eau"];
}

$fish = [
[
    "id"=> 1,
    "nom"=>"Yellow",
    "description"=>"A lively fish found in the sea.",
    "prix"=>12,
    "image"=>"https://gallery.yopriceville.com/var/resizes/Free-Clipart-Pictures/Underwater/Yellow_Fish_PNG_Clipart.png?m=1557962098",
    "eau" => "mer",
    "isProtected" => false
  ],
[
    "id"=> 2,
  "nom"=>"Blue",
  "description"=>"Dory wannabe.",
  "prix"=>15,
  "image"=>"https://pics.clipartpng.com/midle/Blue_Fish_PNG_Clipart-426.png",
  "eau" => "mer",
    "isProtected" => false],
[
    "id"=> 3,
  "nom"=>"Green",
  "description"=>"Very rare fish, perfect for kids' as a first pet.",
  "prix"=>25,
  "image"=>"https://i.pinimg.com/originals/0d/41/40/0d414090aea08ab3db86516d57d09022.jpg",
  "eau" => "douce",
    "isProtected" => false],
[
    "id"=> 4,
  "nom"=>"Orange Roughy",
  "description"=>"Deep sea fish which has an exceptionally long lifespan, which can go beyond 140 years old.",
  "prix"=>5,
  "image"=>"https://media.hswstatic.com/eyJidWNrZXQiOiJjb250ZW50Lmhzd3N0YXRpYy5jb20iLCJrZXkiOiJnaWZcL3RvcC0xMC1tb3N0LWVuZGFuZ2VyZWQtZmlzaDQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjoyOTB9LCJ0b0Zvcm1hdCI6ImF2aWYifX0=",
  "eau" => "mer",
    "isProtected" => true],
[
    "id"=> 5,
  "nom"=>"Black",
  "description"=>"Do you think a black fish means bad luck the same as black cats do ?",
  "prix"=>10,
  "image"=>"https://www.fishkeepingworld.com/wp-content/uploads/2019/08/Black-Moor-Goldfish-Care.jpg?ezimgfmt=ng:webp/ngcb10",
    "eau" => "douce",
    "isProtected" => false],
[
    "id"=> 6,
  "nom"=>"Alosa alosa",
  "description"=>"A fish which can live in both clear and salt water.",
  "prix"=>10,
  "image"=>"https://inpn.mnhn.fr/photos/uploads/webtofs/inpn/9/174829.jpg",
    "eau" => "",
    "isProtected" => true
    ]
];

$pageContent = '';

foreach ($fish as $aFish) {
  
    $fishCard = "<div class='card bg-light mb-3 ml-3 mr-3' name='{$aFish['eau']}' style='max-width: 20rem;'>
            <div class='card-header text-center'>{$aFish['nom']}</div>
            <div class='card-body'>
                <div style='height: 250px' class='d-flex align-center'><img class='card-img-top' src='{$aFish['image']}' alt='Card image cap'></div>
                <h4 class='card-title'>{$aFish['prix']}€</h4>
                <p class='card-text'>{$aFish['description']}</p>
            </div>
            </div>";
        
           if (
             (!$eau || $aFish["eau"] == $eau || $aFish["eau"] == "") &&
             (!$aFish["isProtected"] || $isConnected )) {
             $pageContent .= $fishCard;
           }
}

?>