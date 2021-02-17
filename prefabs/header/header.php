<?php 
if (isset($_GET["content"])) {
    $active = $_GET["content"];
}else {
    $active = "";
}
?>




<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- MDBootstrap css -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- eigen css header -->
  </head>
  <body>

<!-- Dit is de script om de header te laten werken -->
<header>
<!-- Navbar -->
  <nav class="navbar navbar-light bg-dark" style="max-height: 75px;">
  <!-- een fluid container -->
    <div class="container-fluid">
      <col-6>
      <!-- het logo links bovenin -->
        <a href="./index.php?content=home"><img class="navbar-brand" src="./img/logo.png" style="height: 75; margin-top: -17;"></img></a>
      </col-6>
        <form class="d-flex input-group w-auto">
        <!-- een navbar item -->
          <li class="nav-item">
            <col-6>
              <!-- Alle knoppen om na een volgende pagina te gaan -->
              <!-- item home -->
              <a class="navbar-item text-white" style="padding-right: 20px;" href='./index.php?content=home'>Home</a>
              <!-- item aanmelden -->
              <a class="navbar-item text-white" style="padding-right: 20px;" href='./index.php?content=aanmelden'>Aanmelden</a>
              <!-- item game -->
              <a class="navbar-item text-white" style="padding-right: 20px;" href='./index.php?content=game'>game</a>
              <!-- de login knop -->
              <!-- met linkje -->
              <a href="#">
              <button type="button" class="btn btn-primary">login</button></a>
              <!-- een sluit tag van column 6 -->
            </col-6>
          </li>
          <!-- het einde van het form -->
        </form>
        <!-- de div die sluit -->
    </div>
    <!-- het einde van de navbar -->
  </nav>
  <!-- het einde van de header -->
</header>
<!-- Navbar -->

    <!-- MD Bootstrap Javascripts -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
</html>