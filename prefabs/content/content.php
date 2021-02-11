<?php

if (isset($_GET["reference"])){
    $reference = htmlspecialchars($_GET["reference"]);
    if ($reference === "game"){
        include("./prefabs/content/game.php");
    };
};

if (isset($_GET["reference"])){
    $reference = htmlspecialchars($_GET["reference"]);
    if ($reference === "home"){
        include("./prefabs/content/home.php");
    };
};

if (isset($_GET["reference"])){
    $reference = htmlspecialchars($_GET["reference"]);
    if ($reference === "aanmelden"){
        include("./prefabs/content/aanmelden.php");
    }
};

if (isset($_GET["reference"])){ 

}else {
    include("./prefabs/content/home.php");
};

?>