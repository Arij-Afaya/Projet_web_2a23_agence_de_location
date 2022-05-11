<?php
	include '../config.php';
	include_once '../Model/reclamation.php';
	class reclamationc {
		function afficherreclamation(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreclamation($id){
			$sql="DELETE FROM reclamation WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterreclamation($reclamation){
			$sql="INSERT INTO reclamation ( type_c, message_c , date_c) 
			VALUES ( :type_c, :message_c , :date_c) "; 
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'type_c' => $reclamation->gettype_c(),
					'message_c' => $reclamation->getmessage_c(),
					'date_c' => $reclamation->getdate_c(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreclamation($id){
			$sql="SELECT * from reclamation where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreclamation($reclamation, $id){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						type_c= :type_c, 
						message_c= :message_c, 
						date_c= :date_c
						
					WHERE id= :id' 
				);
				$query->execute([
					'type_c' => $reclamation->gettype_c(),
					'message_c' => $reclamation->getmessage_c(),
					'date_c' => $reclamation->getdate_c(),
					
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	
	function recherchereclamation($id)
        {
            $requete = "select * from reclamation where id like '%$id%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
	}
?>