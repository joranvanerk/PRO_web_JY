<?php
    if (isset($_GET["content"])) {
    include("./prefabs/content/" . $_GET["content"] . ".php");
    } else {
    include("./prefabs/content/home.php");
    } 
?> 