<?php
// inlog check
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";

// de html code waarmee je kunt bewerken
// require PATH_LIB . "page-top.php";
require PATH_LIB . "page-top.php";
?>


<?php 

    // verbinding maken met de datbaase
    include_once("./connect_db.php");

    // de query zelf invoeren
    $sql = "SELECT * FROM `pro_aanmeldingen`";

    // de query runnen
    $result = mysqli_query($connect, $sql);
    

    // De recordss variabele aanmaken
    $recordss = "";
    // de while loop zelf
    while ($records = mysqli_fetch_assoc($result)) {
      // alle variabelen uit de database pakken en in een loop zetten
      $recordss .= "<tr><th scope='row'>" . $records["id"] . "</th>
      <td>" . $records["naam"] . "</td>
      <td>" . $records["email"] . "</td>
      <td>" . $records["motivatie"] . "</td>
      <td>" . $records["datum"] . "</td><td>
        <a href='./aanmeldingen.php?delete=" . $records["id"] ."'>
        <i class='fas fa-trash-alt'></i></a></td>
    </tr>";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <!-- het begin van de body -->
  <body>
  <!-- een container voor de aanmeldingen -->
  <main class="container">
    <div class="col2">
    <!-- Op deze plek komt de tabel -->
    <table class="table table-hover">
    <!-- De open tag voor alle letters -->
      <thead>
        <!-- open tag voor de rijen -->
        <tr>
        <!-- de id rij -->
        <th scope="col">ID</th>
        <!-- de naam rij -->
        <th scope="col">Naam</th>
        <!-- de email rij -->
        <th scope="col">Email</th>
        <!-- de motivatie rij -->
        <th scope="col">Motivatie</th>
        <!-- de datum rij -->
        <th scope="col">Datum</th>
        <!-- de lege rij voor het verwijderen -->
        <th scope="col"></th>
        <!-- einde van de tag voor de rijen -->
        </tr>
      </thead>
    <!-- body openene voor de records zelf -->
    <tbody>
      <!-- php gebruiken voor echo -->
      <?php
        // de records zelf uit de while loop bovenin de pagina
        echo $recordss
      // php sluiten
      ?>
    </tbody>
  </table>
</main>





    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="./js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
    // de database zoeken en connecten
    require('connect_db.php');

    // kijken of delete is aangeroepen
    if (isset($_GET["delete"])) {
      $id = $_GET["delete"];
  }


//  "INSERT INTO `aanmeldingen` (`id`, `naam`, `email`, `motivatie`, `datum`) VALUES (NULL, 'naamh', 'emailh', 'motivatieh', 'datumh');"

// kijken of de delete knop is ingedrukt
if (isset($_GET["delete"])) {
  // het ID van de delete url pakken
  $id = $_GET["delete"];
  // de query zelf als variabele zetten
  $blockaan = "DELETE FROM `pro_aanmeldingen` WHERE id=$id";
  // de query uitvoeren richting de database
  mysqli_query($connect, $blockaan);
  // de pagina verversen zodat alle resultaten up-to-date zijn
  echo '<meta http-equiv="refresh" content="0; url=aanmeldingen.php">';
};

// het einde van de pagina
require PATH_LIB . "page-bottom.php"; ?>