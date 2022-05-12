<?php
			
			
			
			
			
			require_once('bdd.php');
			
			
			
			
				
				$departement = $_POST['departement'];
				$nomprenom = $_POST['nomprenom'];
				$tache = $_POST['tache'];
				$datedebut = $_POST['datedebut'];
				$datefin = $_POST['datefin'];
				$description = $_POST['description'];
				$etat = $_POST['etat'];
								
							$sql = "INSERT INTO gestiontache(departement,nomprenom,tache, datedebut,datefin,description,etat) 
							values ('$departement', '$nomprenom', '$tache', '$datedebut','$datefin','$description','Non effectuer')";
							
								
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
							header('location:index.php');

				
			
		?>