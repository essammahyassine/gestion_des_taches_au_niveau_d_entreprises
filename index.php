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
		  <li><a href="qualite.php">Qualité</a></li>
           <li><a href="it.php">IT</a></li>
		   <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	
         
        </ul>
      </nav>     
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>Kglink call center</h1>
        <p>Kglink - Gestion des taches</p>
        <a href="#teams" class="btn btn-large">Equipe Kglink</a> </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Kglink call center</h3>
      <p>KGLINK a développé une excellente approche ayant pour objectif « La satisfaction client » :
	  Cette approche qui vise en priorité l’accompagnement du client, la mise en place de tous les moyens 
	  garantissant la réussite du projet, la transparence dans le traitement et une méthodologie saine, basée 
	  sur la qualité et la satisfaction client et pour cela nous déployons tous les moyens nécessaires pour y parvenir.</p>
    
	</div>
  </div>
</section>


<!-- work section --> 
<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><a href="./affit.php?aff=Yassine Es Sammah"><img src="images/yassine.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Yassine Es Sammah</h4>
            <h5 class="role">Développeur Informatique</h5>
            
		<!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <a href="./affit.php?aff=Mohammed Zouhri"><img src="images/zouhri.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Mohammed Zouhri</h4>
            <h5 class="role">Développeur Informatique</h5>
            <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"><a href="./affadministration.php?aff=Ikram EL Hamdaoui"> <img src="images/ikram.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Ikram EL Hamdaoui</h4>
            <h5 class="role">Assistante direction</h5>
          <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <a href="./affproduction.php?aff=Nicolas Niox"> <img src="images/niox.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Nicolas Niox</h4>
            <h5 class="role">Superviseur</h5>
            <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
	  <br><br><br>
	  <div class="col-md-1 col-sm-6">
      
      </div>
	  <div class="col-md-3 col-sm-6">
        <div class="person"><a href="./affqualite.php?aff=Siham Belfkih">  <img src="images/siham.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Siham Belfkih</h4>
            <h5 class="role">Qualiticien</h5>
           <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		 </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6">
        <div class="person"> <a href="./affqualite.php?aff=Houda Zarhdidi"> <img src="images/houda.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Houda Zarhdidi</h4>
            <h5 class="role">Qualiticien</h5>
            <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
	  <div class="col-md-3 col-sm-6">
        <div class="person"><a href="./affproduction.php?aff=Mehdi Atemni">  <img src="images/mehdi.png" alt="" class="img-responsive"></a>
          <div class="person-content">
            <h4>Mehdi Atemni</h4>
            <h5 class="role">Superviseur</h5>
           <!--<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          -->
		  </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
          </ul>
        </div>
      </div> <div class="col-md-1 col-sm-6">
      
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