<?php
// (A) INIT
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";

// (B) HTML
require PATH_LIB . "page-top.php"; 

// Database connectie opzetten
include_once("./connect_db.php");

// huidige datum ophalen
$date = date("Y/m/d");

// de query voor aantal bezoekers
$sql = "SELECT COUNT(*) FROM pro_statusertrack WHERE `date` = '$date' ;";

// query uitvoeren
$result = mysqli_query($conn, $sql);

// query uitvoer terughalen
$count = mysqli_fetch_array($result);

// users counten van pro_users
$countusers = "SELECT COUNT(*) FROM pro_users;";

// de query uitvoeren
$resultcountusers = mysqli_query($conn, $countusers);

// de resultaten ophalen en in een variabele stoppen
$countusersresult = mysqli_fetch_array($resultcountusers);

// de query voor aantal aanmeldingen
$countaan = "SELECT COUNT(*) FROM pro_aanmeldingen;";

// de query uitvoeren
$resultcountaan = mysqli_query($conn, $countaan);

// de resultaten ophalen en in een variabele zetten
$countaanresult = mysqli_fetch_array($resultcountaan);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- begin van container-->
<!-- begin van div class -->
<div class="container-fluid">
  <div class="row">
    <div class="col-3">
    <div class="card">
      <!-- achtergrond kleur -->
      <div class="card-body" style="background-color: #5e81ff; border: 3px solid white; box-shadow: 4px 4px #dbdbdb;">
        <!-- text tussen de h5 tags-->
        <h5 class="card-title" style="color: white;"><?php echo $count[0]; ?></h5>
        <!-- text tussen de p tags -->
        <p class="card-text" style="color: white;">Aantal bezoekers gebaseerd op woonadres.</p>
      </div>
    </div>
    </div>
    <div class="col-4">
    <div class="card">
      <!-- achtergrond kleur -->
      <div class="card-body" style="background-color: #cfb94c; border: 3px solid white; box-shadow: 4px 4px #dbdbdb;">
        <!-- text tussen de h5 tags-->
        <h5 class="card-title" style="color: white;"><?php echo $countusersresult[0]; ?></h5>
        <!-- text tussen de p tags -->
        <p class="card-text" style="color: white;">Aantal geregistreerde gebruikers.</p>
      </div>
    </div>
    </div>
    <div class="col-4">
    <div class="card">
      <!-- achtergrond kleur -->
      <div class="card-body" style="background-color: #f75757; border: 3px solid white; box-shadow: 4px 4px #dbdbdb;">
        <!-- text tussen de h5 tags-->
        <h5 class="card-title" style="color: white;"><?php echo $countaanresult[0]; ?></h5>
        <!-- text tussen de p tags -->
        <p class="card-text" style="color: white;">Nieuwe aanmeldingen voor SpaceY opleiding.</p>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- einde van div class -->
<!-- wat spacing -->
  <br>
  <!-- het begin van de card -->
  <div class="card">
  <!-- de card header met custom style -->
  <div class="card-header" style="text-align: center;">
    SpaceY 
  </div>
  <!-- een list groep item -->
  <ul class="list-group list-group-flush">
    <!-- het item van de list groep zelf met custom styling -->
    <li class="list-group-item" style="text-align: center;">Beheerder paneel SpaceY, mist u informatie? Vul dan de home pagina zo volledig mogelijk in door in het linker paneel naar home te navigeren!<br> Voor nieuwe aanmeldingen van de opleiding sterrenkunde, navigeer naar Aanmeldingen.</li>
  </ul>
  <!-- einde div -->
</div>
<!-- einde pagina div -->
</div>

<?php require PATH_LIB . "page-bottom.php"; ?>