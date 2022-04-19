<?php
	include '../config.php';
	include_once '../model/vehicule.php';
	class vehiculeC {
		function afficheradherents(){
			$sql="SELECT * FROM vehicule";
			$db = config::getConnexion();
			try{
				$listeAdherents = $db->query($sql);
				return $listeAdherents;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		function supprimervehicule($idv){
			$sql="DELETE FROM vehicule WHERE idv=:idv";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idv', $idv);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteradherent($vehicule){
			$sql="INSERT INTO vehicule (idv,marque, modele, annee, prix) 
			VALUES (:idv,:marque,:modele, :annee,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idv' => $vehicule->getidv(),
					'marque' => $vehicule->getmarque(),
					'modele' => $vehicule->getmodele(),
					'annee' => $vehicule->getannee(),
					'prix' => $vehicule->getprix(),
					//'image' => $vehicule->getimage()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereradherent($idv){
			$sql="SELECT * from vehicule where idv=$idv";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieradherent($vehicule, $idv){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE vehicule SET 
					idv= :idv, 
						marque= :marque, 
						modele= :modele, 
						annee= :annee, 
						prix= :prix
					WHERE idv= :idv'
				);
				$query->execute([
					'idv' => $vehicule->getidv(),
					'marque' => $vehicule->getmarque(),
					'modele' => $vehicule->getmodele(),
					'annee' => $vehicule->getannee(),
					'prix' => $vehicule->getprix(),
					'idv' => $idv
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>