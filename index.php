
<DOCTYPE! html>
<html>

<head>
<title>THE@HO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="hp.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- 
<script language="javascript" type="text/javascript" 
src="footerTHE@HO.php"></script>
<script language="javascript" type="text/javascript" 
      src="header.php"></script> -->
</head>

<body style="background-color:black;text-align:center">

<!-----------------------------------------------HEADER-------------------------------------------------------------------------------------------------------------------->
<?php
include 'includes/header.php';
?>
<!------------------------------------------------------------  SLIDER  ---------------------------------------------------------------------------------------------->
<div id="slider">

<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=".\images\pic5.png"
	  class="d-block w-100">
    </div>
	
    <div class="carousel-item">
   <a href= '#'> <img src=".\images\galaksia.jpg" 
	  class="d-block w-100" > </a>
	</div>
	
    <div class="carousel-item">
      <a href= '#'><img src=".\images\udha e qumshtit1.jpg" class="d-block w-100" > </a>
	  
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

</div>



<!---------------------------------------------------------------------  shfaqjet--------------------------------------- -------------------------------------------->


<div class="row">
    <div class="column">
        <a href= '#'> <img src=".\images\heroinat.jpg"  style="width:100%"><p>“HEROIDES” – HEROINAT
        Letrat e heroinave të mitit nga antikiteti e deri më sot nga
        Heroides i Ovidio-s</p>
    </div>
    <div class="column">
        <a href= '#'>  <img src=".\images\galaksia1.jpg"  style="width:100%"><p>“Lufta e artistit për të thënë të vërtetën deri në fund me veprën e tij dhe mospranimi apo gati-gati ekzekutimi i veprës dhe artistit nga shteti!
             A janë betejat triumfuese?!
             Apo ajo që ndodh është masakër?! Të vërtetën e zbulojmë në “ArTurbina”</p>
      </div>
    <div class="column">
        <a href= '#'> <img src=".\images\udha e qumshtit.jpg"  style="width:100%"><p>”Udha e qumështit” në vetvete përmban një eksperiencë të veçantë, bëhet fjalë për një histori të shkurtër,
           një histori që ka ndodhur para viteve ‘90 me një personazh konkret real.</p>
    </div>
    
  </div>
  

<!-------------------------------------------------------------------------FOOTER SECTION--------------------------------------------------------------------------------->
<?php
include 'includes\footerTHE@HO.php';
?>
    
</body>
</html>