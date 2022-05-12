<?php

// Connexion à la base de données
require_once('bdd.php');

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
	//$_SESSION['user']=$row['nom'];
	//$_SESSION['typeuser']=$row['type'];
}
	header('Location: index.php');
	
	}else
	{
		session_unset();
        session_destroy();
		header('Location: login.php');
		
	}?>


