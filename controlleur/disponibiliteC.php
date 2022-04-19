<?php
	include '../config.php';
	include_once '../model/disponibilite.php';
	class disponibiliteC {
		function afficherdisponibilite(){
			$sql="SELECT * FROM disponibilite";
			$db = config::getConnexion();
			try{
				$listedisponibilite = $db->query($sql);
				return $listedisponibilite;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		function supprimerdisponibilite($idd){
			$sql="DELETE FROM disponibilite WHERE idd=:idd";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idd', $idd);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterdisponibilite($disponibilite){
			$sql="INSERT INTO disponibilite (idd,categoried, dated, datef) 
			VALUES (:idd,:categoried,:dated,:datef)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idd' => $disponibilite->getidd(),
					'categoried' => $disponibilite->getcategoried(),
					'dated' => $disponibilite->getdated(),
					'datef' => $disponibilite->getdatef()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererdisponibilite($idd){
			$sql="SELECT * from disponibilite where idd=$idd";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$disponibilite=$query->fetch();
				return $disponibilite;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierdisponibilite($disponibilite, $idd){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE disponibilite SET 
					idd= :idd, 
						categoried= :categoried, 
						dated= :dated, 
						datef= :datef
					WHERE idd= :idd'
				);
				$query->execute([
					'idd' => $disponibilite->getidd(),
					'categoried' => $disponibilite->getcategoried(),
					'dated' => $disponibilite->getdated(),
					'datef' => $disponibilite->getdatef(),
					'idd' => $idd
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>