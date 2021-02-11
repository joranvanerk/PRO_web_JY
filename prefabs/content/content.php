<?php

$reference = htmlspecialchars($_GET["urllink"]);


if ($reference = "home") {
    include_once("./home.php");
} else if ($reference = "aanmelden") {
    include_once("./aanmelden.php")
} else if ($reference = "game") {
    include_once("./game.php")
};
?>