<?php
	include '../config.php';
	include_once '../Model/reponse.php';
	class reponsec {
		function afficherreponse(){
			$sql="SELECT * FROM reponse";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreponse($id_r){
			$sql="DELETE FROM reponse WHERE id_r=:id_r";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_r', $id_r);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterreponse($reponse){
			$sql="INSERT INTO reponse ( date_r, reponse_r) 
			VALUES (:date_r ,:reponse_r) "; 
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'date_r' => $reponse->getdate_r(),
					'reponse_r' => $reponse->getreponse_r(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreponse($id_r){
			$sql="SELECT * from reponse where id_r=$id_r";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reponse=$query->fetch();
				return $reponse;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreponse($reponse, $id_r){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reponse SET 
						date_r= :date_r, 
						reponse= :reponse_r  
						
					WHERE id_r= :id_r' 
				);
				$query->execute([
					'date_r' => $reponse->getdate_r(),
					'reponse_r' => $reponse->getreponse_r(),
					'id_r' => $id_r
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>