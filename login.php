<?php



// Connexion à la base de données

require_once('bdd.php');

if(isset($_POST['log'])){

session_start();

  

  $email = $_POST['email'];

  $password = $_POST['password'];

  

  





$sql = "SELECT count(*) FROM user where email='$email' and password='$password'"; 

$result = $bdd->prepare($sql); 

$result->execute(); 

$number_of_rows = $result->fetchColumn(); 

//echo $number_of_rows;





if($number_of_rows == 1) 

    {

  $sqla = "SELECT * FROM user where email='$email' and password='$password'";

foreach  ($bdd->query($sqla) as $row) 

{

   $_SESSION['iduser']=$row['nom'];

 // $_SESSION['username']=$row['username'];

  //$_SESSION['typeuser']=$row['typeuser'];

 // $test=$row['typeuser'];
 $roll=$row['roll'];

}

 //if($test==='admin'){header('Location: index2.php');}

//if($test==='User' || $test==='user' ){ header('Location: index1.php');}

 //if($test==='Sponsor'){header('Location: index3.php');}
if($roll=='User')
{
	header('Location: mestaches.php');
}
 else{header('Location: index.php');}

 

  

  }else

  {

   // session_unset();

       // session_destroy();

    header('Location: login.php');

    

  }

  }?>



<!doctype html>

<html class="no-js" lang="">


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
</head>

<body>

<section class="banner" role="banner">
 <!-- <header id="header">
    <div class="header-content clearfix">
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
        
        </ul>
      </nav>
   
  </header>-->
  
  <div class="container">
    <div class="col-md-12">
      <div class="banner-text ">
	  

		
	   <div class="col-md-8">
	 
		
		</div>
	   <div class="col-md-4">
	   <div class="well well-lg">
	  <form method="post"><!--action="l.php" -->
	 
	  <img src="images/kglink.png" alt="" class="img-responsive">
	  <hr>
 <div class="form-group">
  <label for="usr"><a>Username:</a></label>
  <input type="text" class="form-control" id="email" name="email">
</div>
<div class="form-group">
  <label for="pwd"><a>Password:</a></label>
  <input type="password" class="form-control" id="password" name="password">
</div>
<input type="submit"  id="log" name="log" class="btn btn-large btn-block"/>
</form>
</div>
</div>
  
		</div>
    
    </div>
  </div>
</section>



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