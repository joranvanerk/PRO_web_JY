<?php
// inlog check
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";

// de html code waarmee je kunt bewerken
// require PATH_LIB . "page-top.php";
require PATH_LIB . "page-top.php";
?>


<?php include_once("./connect_db.php");

    $sql = "SELECT * FROM `home`";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
  <main class="container">
    </div>
        <div class="col6">
          <form action="" method="POST">
            <div class="form-group">
              <label for="titel">Titel</label>
              <input type="text" name="titel" class="form-control" id="titel" aria-describedby="firstnameHelp" value="<?php echo $record["titel"]; ?>">
            </div>
            <div class="form-group">
              <label for="tekst">Heading</label>
              <input type="text" name="heading" class="form-control" id="heading" aria-describedby="lastnameHelp" value="<?php echo $record["heading"]; ?>">
            </div>
            <input type="submit" name="submit" value="Opslaan">
            <!-- <button type="submit" class="btn btn-primary">Opslaan</button> -->
          </form>
          <br>

          <form action="" method="POST">
            <div class="form-group">
              <label for="titel">Card 1</label>
              <input type="text" name="card1" class="form-control" id="card1" aria-describedby="firstnameHelp" value="<?php echo $record["card1"]; ?>">
            </div>
            <div class="form-group">
              <label for="tekst">Card 1 tekst</label>
              <input type="text" name="card1tekst" class="form-control" id="card1tekst" aria-describedby="lastnameHelp" value="<?php echo $record["card1tekst"]; ?>">
            </div>
            <input type="submit" name="submit1" value="Opslaan">
            <!-- <button type="submit" class="btn btn-primary">Opslaan</button> -->
          </form>
          <br>

          <form action="" method="POST">
            <div class="form-group">
              <label for="titel">Card 2</label>
              <input type="text" name="card2" class="form-control" id="card2" aria-describedby="firstnameHelp" value="<?php echo $record["card2"]; ?>">
            </div>
            <div class="form-group">
              <label for="tekst">Card 2 tekst</label>
              <input type="text" name="card2tekst" class="form-control" id="card2tekst" aria-describedby="lastnameHelp" value="<?php echo $record["card2tekst"]; ?>">
            </div>
            <input type="submit" name="submit2" value="Opslaan">
            <!-- <button type="submit" class="btn btn-primary">Opslaan</button> -->
          </form>
          <br>

          <form action="" method="POST">
            <div class="form-group">
              <label for="titel">Card 3</label>
              <input type="text" name="card3" class="form-control" id="card3" aria-describedby="firstnameHelp" value="<?php echo $record["card3"]; ?>">
            </div>
            <div class="form-group">
              <label for="tekst">Card 3 tekst</label>
              <input type="text" name="card3tekst" class="form-control" id="card3tekst" aria-describedby="lastnameHelp" value="<?php echo $record["card3tekst"]; ?>">
            </div>
            <input type="submit" name="submit3" value="Opslaan">
            <!-- <button type="submit" class="btn btn-primary">Opslaan</button> -->
          </form>
          <br>

          <form action="" method="POST">
            <div class="form-group">
              <label for="titel">Card 4</label>
              <input type="text" name="card4" class="form-control" id="card4" aria-describedby="firstnameHelp" value="<?php echo $record["card4"]; ?>">
            </div>
            <div class="form-group">
              <label for="tekst">Card 4 tekst</label>
              <input type="text" name="card4tekst" class="form-control" id="card4tekst" aria-describedby="lastnameHelp" value="<?php echo $record["card4tekst"]; ?>">
            </div>
            <input type="submit" name="submit4" value="Opslaan">
            <!-- <button type="submit" class="btn btn-primary">Opslaan</button> -->
          </form>
          <br>
          
          <div class="col6"></div>
    </div>
  </main>
</form>





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
    require('connect_db.php');

    $titel = $_POST["titel"];
    $heading = $_POST["heading"];
    $card1 = $_POST["card1"];
    $card1tekst = $_POST["card1tekst"];
    $card2 = $_POST["card2"];
    $card2tekst = $_POST["card2tekst"];
    $card3 = $_POST["card3"];
    $card3tekst = $_POST["card3tekst"];
    $card4 = $_POST["card4"];
    $card4tekst = $_POST["card4tekst"];

    if(isset($_POST["submit"])){
      if($query = mysqli_query($connect,"UPDATE home SET titel='$titel', heading='$heading'")){
          echo "Opgeslagen (klik <a href='./home.php'>hier</a> om te herladen) <br>";
      }else{
          echo "Fout" . mysqli_error($connect);
      }
  }

  if(isset($_POST["submit1"])){
    if($query = mysqli_query($connect,"UPDATE home SET card1='$card1', card1tekst='$card1tekst'")){
        echo "Opgeslagen (klik <a href='./home.php'>hier</a> om te herladen) <br>";
    }else{
        echo "Fout" . mysqli_error($connect);
    }
}

if(isset($_POST["submit2"])){
  if($query = mysqli_query($connect,"UPDATE home SET card2='$card2', card2tekst='$card2tekst'")){
      echo "Opgeslagen (klik <a href='./home.php'>hier</a> om te herladen) <br>";
  }else{
      echo "Fout" . mysqli_error($connect);
  }
}

if(isset($_POST["submit3"])){
  if($query = mysqli_query($connect,"UPDATE home SET card3='$card3', card3tekst='$card3tekst'")){
      echo "Opgeslagen (klik <a href='./home.php'>hier</a> om te herladen) <br>";
  }else{
      echo "Fout" . mysqli_error($connect);
  }
}

if(isset($_POST["submit4"])){
  if($query = mysqli_query($connect,"UPDATE home SET card4='$card4', card4tekst='$card4tekst'")){
      echo "Opgeslagen (klik <a href='./home.php'>hier</a> om te herladen) <br>";
  }else{
      echo "Fout" . mysqli_error($connect);
  }
}
?>
<?php 

require PATH_LIB . "page-bottom.php"; ?>