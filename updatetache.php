<?php

// Connexion à la base de données
require_once('bdd.php');

if (isset($_GET['id'])){
	
	$id=$_GET['id'];
	

	$sql = "UPDATE gestiontache SET  etat = 'Realisé' WHERE id = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
