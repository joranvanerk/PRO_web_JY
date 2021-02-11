<?php

// checken of reference is gezet
if (isset($_GET["reference"])){
    // schoonmaken variabele
    $reference = htmlspecialchars($_GET["reference"]);
    // kijken of een specifieke variabele is gezet
    if ($reference === "game"){
        // include de juiste pagina
        include("./prefabs/content/game.php");
    };
};

// checken of reference is gezet
if (isset($_GET["reference"])){
    // schoonmaken variabele
    $reference = htmlspecialchars($_GET["reference"]);
    // kijken of een specifieke variabele is gezet
    if ($reference === "home"){
        // include de juiste pagina
        include("./prefabs/content/home.php");
    };
};

// checken of reference is gezet
if (isset($_GET["reference"])){
    // schoonmaken variabele
    $reference = htmlspecialchars($_GET["reference"]);
    // kijken of een specifieke variabele is gezet
    if ($reference === "aanmelden"){
        // include de juiste pagina
        include("./prefabs/content/aanmelden.php");
    }
};

// checken of reference is gezet
if (isset($_GET["reference"])){ 
// letterlijk niks doen en anders
}else {
    // include de home pagina omdat reference niet gezet is
    include("./prefabs/content/home.php");
};

?>