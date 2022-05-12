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

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  
		
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css"/>

      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		
		
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
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

<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.html">Kglink</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="production.php">Production</a></li>
          <li><a href="administration.php">Administration</a></li>
		  <li><a href="qualite.php">Qualité</a></li>
          <li><a href="it.php">IT</a></li>
         
        </ul>
      </nav>     
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
      <h1>Kglink call center</h1>
        <p>Département IT</p>
		<a href="#contact" class="btn btn-large">Affecter une tache</a> </div>
         
    </div>
  </div>
</section>

<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
	  <div class="conForm">
        <h5>Département IT</h5>
        <p>Affecter une tache au Département IT</p>
      </div>
            <div class="row">
                <div class="col-sm-12">
				
 <?php 
require_once('bdd.php');
			
				?>


  

 
  



<div class="">
 
            <div class="minheight-right-nav-data form-group ">
              <table id="data_report" class="table table-striped  dt-responsive nowrap" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" >
                     
  <thead>
                      <tr bgcolor="#181818">
					  <td>
					  <p style='color:#6c7279;'>Département</p>
					  </td>
					  <td>
					  <p style='color:#6c7279;'>Nom</p>
					  </td>
					  <td>
					  <p style='color:#6c7279;'>Tache</p>
					  </td>
					  <td>
					  <p style='color:#6c7279;'>Date debut</p>
					  </td>
					  <td>
					  <p style='color:#6c7279;'>Date fin</p>
					  </td>
					  <td>
					  <p style='color:#6c7279;'>Description</p>
					  </td>
					   <td>
					  <p style='color:#6c7279;'>Etat</p>
					  </td>
                     </tr>
					  </thead>
					                          <tbody>
					<?php
					
							
								$sql = "select * FROM gestiontache where departement='Département IT' ORDER BY id desc" ;
    foreach  ($bdd->query($sql) as $row) {
								
					?>
			
			   <tr>
							<td><?php echo $row['departement']; ?></td>
							<td><?php echo $row['nomprenom']; ?></td>
							<td><?php echo $row['tache']; ?></td>
							<td><?php echo $row['datedebut']; ?></td>
							<td><?php echo $row['datefin']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['etat']; ?></td>
							
						
							
							
							
							</tr>
							  
							 <?php
	} ?>


					</tbody>
													</table>
													</div>
                                            </div>
							<script>
                $(document).ready(function() {
                $('#data_report').DataTable();
               
                });</script>		                       
							    
                  
                </div>
            
            </div>
	    
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Our Office Location</h5>
          <p>Collins Street West Victoria 8007 Australia.<br>
            1800 1234 56789 / 98532100987<br>
            support@lexis.com</p>
          <p>Copyright © 2015 Lexis Inc. All Rights Reserved. Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a></p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Services We Offer</h5>
          <p>
          <ul>
            <li><a href="#">Digital Strategy</a></li>
            <li><a href="#">Websites</a></li>
            <li><a href="#">Videography</a></li>
            <li><a href="#">Social Media</a></li>
            <li><a href="#">User Experience</a></li>
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
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> -->
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>