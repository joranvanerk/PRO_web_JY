<?php include_once("./paneel/connect_db.php");

    // alle resultaten uit de database home pakken
    $sql = "SELECT * FROM `pro_home`";

    // de resultaten pakken
    $result = mysqli_query($conn, $sql);

    // alle resultaten in een variabele stoppen
    $record = mysqli_fetch_assoc($result);
    
?>

<style>

#bgra{
  border-radius: 20px; 
  background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
  transition-duration: 1s;
}

#bgra:hover{
  border-radius: 40px; 
  background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
  transition-duration: 1s;
  transform: rotate(5deg);
}

#imgundraw {
  width: 550;
  height: 550;
  transition: 1s;
  padding: 10px;
}

#imgundraw:hover {
  width: 550;
  height: 550;
  transition: 1s;
  padding: 0px;
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- home pagina -->
<section class="fdb-block">
<!-- begin van container -->
  <div class="container">
  <!-- begin van row -->
    <div class="row align-items-center pb-xl-5">
      <!-- div collumns -->
      <div class="col-12 col-md-7 col-xl-5">
      <!-- titel tekst -->
        <h1 class="font-weight-bold text-cyan-900"><?php echo $record["heading"]; ?></h1>
        <!-- banner tekst -->
        <p class="lead"> Welkom op de site van SpaceY. Hier zul je informatie vinden over de opleiding. Je kunt hier een spel vinden dat jou een beeld zal geven over de opleiding. Veel succes!</p>
        <!-- einde sluit div -->
      </div>
      <!-- de div met collumns en responsive -->
      <div class="col-12 col-sm-6 col-md-4 m-sm-auto mr-md-0 ml-md-auto pt-4 pt-md-0">
      <!-- nieuwe undraw svg -->
      <img src="./img/undraw_Outer_space_drqu.svg" alt="" id="imgundraw">
      </div>
    </div>
  </div>

<!-- de card-groep -->
<div class="card-group" style="margin-right: 5%; margin-left: 5%; border-radius: 20px;">
<!-- simpele card -->
  <div class="card m-5" id="bgra">
  <!-- card body met daaronder de inhoud -->
    <div class="card-body">
      <!-- icon aan de header van de card -->
      <i class="fas fa-tags fa-3x pb-3"></i>
      <!-- De card titel -->
      <!-- prijs -->
      <!-- Wij hebben de beste prijzen voor de Kwaliteit dat je gaat krijgen bij ons. -->
      <h5 class="card-title"><?php echo $record["card1"]; ?></h5>
      <!-- De card teksten inhoud -->
      <p class="card-text" style="color: black;"><?php echo $record["card1tekst"]; ?></p>
      <!-- De footer van de card -->
      <!-- <p class="card-text"><small class="text-muted">Pricing</small></p> -->
    </div>
  </div>
  <!-- simpele card -->
  <div class="card m-5" id="bgra">
  <!-- card body met daaronder de inhoud -->
    <div class="card-body">
      <!-- icon aan de header van de card -->
      <i class="fas fa-sliders-h fa-3x pb-3"></i>
      <!-- De card titel -->
      <!-- kwaliteit -->
      <!-- Wij hebben de beste leer methode opgezet voor de studenten voor het uiterste resultaat. -->
      <h5 class="card-title"><?php echo $record["card2"]; ?></h5>
      <!-- De card teksten inhoud -->
      <p class="card-text" style="color: black;"><?php echo $record["card2tekst"]; ?></p>
      <!-- De footer van de card -->
      <!-- <p class="card-text"><small class="text-muted">Quality</small></p> -->
    </div>
  </div>
  <!-- simpele card -->
  <div class="card m-5" id="bgra">
  <!-- card body met daaronder de inhoud -->
    <div class="card-body">
      <!-- icon aan de header van de card -->
      <i class="fas fa-adjust fa-3x pb-3"></i>
      <!-- De card titel -->
      <!-- interactief -->
      <!-- Er is een spel voor jullie opgezet om een beeld te krijgen van de opleiding. -->
      <h5 class="card-title"><?php echo $record["card3"]; ?></h5>
      <!-- De card teksten inhoud -->
      <p class="card-text" style="color: black;"><?php echo $record["card3tekst"]; ?></p>
      <!-- De footer van de card -->
      <!-- <p class="card-text"><small class="text-muted">Interactive</small></p> -->
    </div>
  </div>
  <!-- simpele card -->
  <div class="card m-5" id="bgra">
  <!-- card body met daaronder de inhoud -->
    <div class="card-body">
      <!-- icon aan de header van de card -->
      <i class="fas fa-space-shuttle fa-3x pb-3"></i>
      <!-- De card titel -->
      <!-- praktijk -->
      <!-- Naast het theorie zullen jullie zeer zeker ook het praktijk krijgen voor een optimale ervaring om alles beter te begrijpen. -->
      <h5 class="card-title"><?php echo $record["card4"]; ?></h5>
      <!-- De card teksten inhoud -->
      <p class="card-text" style="color: black;"><?php echo $record["card4tekst"]; ?></p>
      <!-- De footer van de card -->
      <!-- <p class="card-text"><small class="text-muted">Practice</small></p> -->
    <!-- einde pagina div -->
    </div>
  <!-- nog een div sluiten -->
  </div>
<!-- de laatste div sluiten -->
</div>
<br>
<!-- de titel van de faq  -->
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions"> 
  <!-- het begin van de container  -->
  <div class="container">
    <!-- de titel van de faq  -->
	  <h2 class="font-weight-bold text-cyan-900" style="text-align: center;">Frequently Asked Questions </h2>
    <!-- Het begin van de accordion -->
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <!-- Het begin van een panneel -->
		<div class="panel panel-default">
      <!-- De titel van de paneel -->
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
      <!-- de titel zelf -->
			<h3 class="panel-title">
        <!-- de titel met link -->
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
				Q: Wat zijn de eisen?
        <!-- Het einde van de titel zelf -->
			  </a>
      <!-- einde van de titel -->
			</h3>
      <!-- einde div -->
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>De eisen voor de sterrenkunde opleiding voor ruimtevaart en ruimteonderzoek zijn het bezitten van een gezond en functioneel lichaam zonder gebreken. Probeer bij het <a href="./index.php?content=aanmelden" class="label label-success">aanmelden</a> zo volledig mogelijk alle velden in te vullen en wees erlijk, de opleiding is erg specifiek en ingewikkeld.</p>
			</div>
		  </div>
		</div>
    <!-- einde div -->
    
    <!-- begin div -->
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				Q: Waarom SpaceY?
			  </a>
			</h3>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3 mb-4">
			  <p>Bij SpaceY bieden wij een complete opleiding en een toekomstplan, wij bieden de complete opleiding voor de ruimtevaart in sterrenkunde.</p>
			</div>
		  </div>
		</div>
    <!-- einde div -->
		
		<!-- begin div -->
    <div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
				Q: Wat kost het?
			  </a>
			</h3>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3 mb-4">
			  <p>Bij de opleiding sterrenkunde binnen SpaceY liggen de prijzen verschilend tussen €95.000,- en €210.000,-</p>
			</div>
		  </div>
		</div>
    <!-- einde div -->
		
    <!-- begin div -->
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
				Q: Waar kan ik mezelf aanmelden?
			  </a>
			</h3>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
			<div class="panel-body px-3 mb-4">
			  <p>We hopen jouw applicatie zo snel mogelijk te kunnen beoordelen, meld jezelf aan via <a href="./index.php?content=aanmelden" class="label label-success">aanmelden</a>, wil je weten of de opleiding iets voor je is? Speel onze <a href="./index.php?content=game" class="label label-success">game</a> </p>
			</div>
		  </div>
		</div>
	  </div>
    <!-- einde div -->
  
  </div>
</section>
<!-- einde code -->