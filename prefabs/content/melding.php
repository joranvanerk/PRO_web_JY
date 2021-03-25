<?php

    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch($alert){
        case "GeenEmail" :
            echo '<div class="alert alert-primary mt-5" role="alert">
            Uw e-mailadres is onjuist of niet ingevuld!
          </div>';
        break;
        case "DatabaseFout" :
            echo '<div class="alert alert-primary mt-5 w-50" role="alert">
            Er is een fout opgetreden tijdens het versturen, contacteer een administrator!
          </div>';
        break;
        case "OnbekendeFout" :
            echo '<div class="alert alert-primary mt-5 w-50" role="alert">
            Er is een onbekende fout opgetreden, probeer het later nogmaals!
          </div>';
        break;
        case "AanmeldingGelukt" :
            echo '<div class="alert alert-primary mt-5" role="alert">
            Aanmelding succesvol verstuurd!
          </div>';
        break;
            echo '<br>';
        default;
    break;
    }
?>