<?php
//redirecten als de persoon niet is ingelogd
$_ADMIN = isset($_SESSION['user']);
// kijken of de persoon admin is
if (!$_ADMIN && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login") {
  // persoon sturen naar login
  header('Location: login.php');
  // exit gebruiken voor veilig verloop gebruikerservaring
  exit();
}
?>

<!-- html gebruiken -->
<!DOCTYPE html>
<html>
  <head>
  <!-- alle bootstrap links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- de titel -->
  <title>Beheer</title>
  <meta name="robots" content="noindex, nofollow">
  <link href="public/admin.css" rel="stylesheet">
  <script src="public/admin.js"></script>
  </head>
  <!-- de body -->
  <body>
    <!-- aan het laden -->
    <div id="page-loader">
      <!-- de lader zelf inladen -->
      <img id="page-loader-spin" src="public/cube-loader.svg">
    </div>

    <?php if ($_ADMIN) { ?>
    <!-- zijbalk -->
    <nav id="page-sidebar">
      <!-- link aanmaken -->
      <a href="users.php">
        <!-- gebruikersbeheer tekst met icoon -->
        <span class="fa ico">&#9879;</span> Gebruikersbeheer
      </a>
      <!-- link aanmaken -->
      <a href="./home.php">
        <!-- home tekst met icoon -->
        <span class="fa ico">&#xf0c2;</span> Home
      </a>
      <!-- link aanmaken -->
      <a href="./aanmeldingen.php">
        <!-- aanmeldingewn tekst met icoon -->
        <span class="fa ico">&#xf0c2;</span> Aanmeldingen
      </a>
    </nav>
    <?php } ?>

    <!-- content -->
    <div id="page-main">
      <?php if ($_ADMIN) { ?>
      <!-- navigatie zijbalk -->
      <nav id="page-nav">
        <!-- knoppen bekijken via js -->
        <div id="page-button-side" onclick="admin.sidebar();">&#9776;</div>
        <div id="page-button-out" onclick="admin.bye();">&#9747;</div>
      </nav>
      <?php } ?>

      <!-- pagina content -->
      <main id="page-contents">