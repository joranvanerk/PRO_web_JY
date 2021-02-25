<html lang="en">
  <head>
    <!-- alle meta tags -->
    <?php include_once("./core/required_meta_tags.html") ?>

    <!-- Alle style -->
    <?php include_once("./core/style.html") ?>
    <link rel="stylesheet" href="./core/css/main-core.css">
    <!-- Titel of deze website -->
    <title>SPACEY</title>
    
  </head>
  <body>
  
    <!-- De tekst boven in de pagina -->
    <?php include_once("./prefabs/header/header.php") ?>

    <!-- content van de pagina :) ;) :D-->
    <?php include_once("./prefabs/content/content.php") ?> 
    <!-- Het instarten van de loader-wrapper class -->
    <div class="loader-wrapper">
    <!-- de preload class voor animatie -->
    <div class="preload">
    <!-- De status van herhaling -->
    <div class="preload-status">
    <!-- De animatie zelf -->
    <div class="preload-status-bar"></div>
    <!-- De tekst in de animatie -->
    <div class="preload-status-info">SPACEY</div>
    <!-- Einde van de div -->
    </div>
</div>
  </span>
    </div>
    <!-- Is dat tekst onder te website die je ziet -->
    <footer class="page-footer center-on-small-only pt-0 mt-5"><?php include_once("./prefabs/footer/footer.php") ?></footer>
    <!-- Alle javascript en script bestanden -->
    <?php include_once("./core/script.html"); ?>
    
    <!-- Simpele javascript script voor het laden van de animaties bij het herladen of switchen van pagina -->
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <!-- de core scripts en andere scripts (javascript) laden -->
    <link rel="script" href="./core/script.js" />
    <script src="jquery-2.1.4.js"></script>
  </body>
</html>