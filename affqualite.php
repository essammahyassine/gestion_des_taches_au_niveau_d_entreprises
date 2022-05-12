<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kglink - Gestion</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <?php 

session_start();



if (!isset($_SESSION['iduser']) )   {

header('Location: login.php');

}

else

{

   //$test=$_SESSION['typeuser'];
//$iduser=$_SESSION['iduser'];

}



 

?>

</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">Kglink</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
         <li><a href="production.php">Production</a></li>
          <li><a href="administration.php">Administration</a></li>
		  <li><a href="qualite.php">Qualite</a></li>
           <li><a href="it.php">IT</a></li><li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         
        </ul>
      </nav>     
      <a href="#contact" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
   <h1>Kglink call center</h1>
        <p>Département Qualité</p>
		
			 <div class="form-group">
    <a href="#contact" class="btn btn-block">Affecter une tache</a> 
    </div>
	<div class="form-group">
		<a href="listetachequalite.php#contact" class="btn  btn-block">Liste des taches</a>
		</div>
		
		
		</div>
      
    </div>
  </div>
</section>

<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
	  <div class="conForm">
        <h5>Département Qualité</h5>
        <p>Affecter une tache au Département Qualité</p>
      </div>
        <form method="post" action="addtache.php">
		
		  <div class="form-group">
      <label for="pwd">Département:</label>
      <input type="text" class="form-control" Value="Département Qualité" name="departement" id="departement" readonly>
    </div>
		 <?php

require_once('bdd.php');

	
if (isset($_GET['aff'])
){
	 
	
	$aff = $_GET['aff'];
	
	
	
	}
		?>
	  
<div class="form-group">
      <label for="pwd">Nom :</label>
      <input type="text" class="form-control" Value="<?php echo $aff; ?>" name="nomprenom" id="nomprenom" readonly>
    </div>	
		 
    <div class="form-group">
      <label for="pwd">Tache:</label>
      <input type="text" class="form-control" placeholder="Tache" name="tache" id="tache">
    </div>
	<div class="form-group">
      <label for="pwd">Date debut:</label>
      <input type="datetime-local" class="form-control" name="datedebut" id="datedebut">
    </div>
	<div class="form-group">
      <label for="pwd">Date Fin:</label>
      <input type="datetime-local" class="form-control" name="datefin" id="datefin">
    </div>
	
	<div class="form-group">
  <label for="comment">Description :</label>
  <textarea class="form-control" rows="7" name="description" id="description" placeholder="Description"></textarea>
</div>
	<div class="form-group">
  <input type="submit" class="form-control button btn-success" value="Ajouter">
  </div>
	<div class="form-group">
 <input type="clear" class="form-control button btn-danger text-center" value="Vider">
    
  </div>
	
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>KGlink Call Center</h5>
          <p>Avenue des fars Lot Walili  Fes 30000 Maroc<br>
            +212 5 3890 30 11</p>
			 




          <p>Copyright © 2017 Kglink call center. All Rights Reserved. Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.k-glink.com/">Kglink</a></p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Services</h5>
          <p>
          <ul>
            <li><a href="it.php">IT</a></li>
            <li><a href="administration.php">Administration</a></li>
            <li><a href="qualite.php">Qualié</a></li>
            <li><a href="superviseur.php">Supervision</a></li>            
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Share with Love</h5>
          <ul class="footer-share">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>