<html lang="en">
  <head>

    <style>



    </style>
    <!-- alle meta tags -->
    <?php include_once("./core/required_meta_tags.html") ?>

    <!-- Alle style -->
    <?php include_once("./core/style.html") ?>
    <link rel="stylesheet" href="./core/css/main-core.css">
    <!-- Titel of deze website -->
    <title>SPACEY</title>
    
  </head>
    <!-- Background -->
  <body>
  
    <!-- De tekst boven in de pagina -->
    <?php include_once("./prefabs/header/header.php") ?>

    <!-- content van de pagina :) ;) :D-->
    <?php include_once("./prefabs/content/content.php") ?> 
    <script src="jquery-2.1.4.js"></script>
    <div class="loader-wrapper">
    <div class="preload">
    <div class="preload-status">
        <div class="preload-status-bar"></div>
        <div class="preload-status-info">SPACEY</div>
    </div>
</div>
  </span>
    </div>
    <!-- Is dat tekst onder te website die je ziet -->
    <footer class="page-footer center-on-small-only pt-0 mt-5"><?php include_once("./prefabs/footer/footer.php") ?></footer>
    <!-- Alle javascript en script bestanden -->
    <?php include_once("./core/script.html"); ?>
    

    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <link rel="script" href="./core/script.js" />
  </body>
</html>