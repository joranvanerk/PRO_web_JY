<?php


    //gegevens voor database inloggen
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spacey";

    //inloggen bij de database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $connect = mysqli_connect("localhost", "root", "","spacey") 
    or die("Error " . mysqli_error($connect)); 
?>