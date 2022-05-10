<?php
	include '../config.php';
	include_once '../model/vehicule.php';
	//include_once '../model/disponibilite.php';
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
			$sql="INSERT INTO vehicule (marque, modele, annee, prix, image,disponibilite) 
			VALUES (:marque,:modele, :annee,:prix, :image,:disponibilite)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'marque' => $vehicule->getmarque(),
					'modele' => $vehicule->getmodele(),
					'annee' => $vehicule->getannee(),
					'prix' => $vehicule->getprix(),
					'image' => $vehicule->getimage(),
					//'rating' => $vehicule->getrating(),
					'disponibilite' => $vehicule->getdisponibilite()
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
						prix= :prix,
						image= :image
						/*rating= :rating*/
						/*disponibilite= :disponibilite*/
					WHERE idv= :idv'
				);
				$query->execute([
					'idv' => $vehicule->getidv(),
					'marque' => $vehicule->getmarque(),
					'modele' => $vehicule->getmodele(),
					'annee' => $vehicule->getannee(),
					'prix' => $vehicule->getprix(),
					'image' => $vehicule->getimage(),
					//'rating' => $vehicule->getrating(),
					/*'disponibilite' => $vehicule->getdisponibilite(),*/
					'idv' => $idv
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}




		
		function trivehicule(){
            $requete = "select * from vehicule ORDER BY marque";
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



		function recherchevehicule($idv)
        {
            $requete = "select * from vehicule where idv like '%$idv%'";
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

		function getcommandebynum($idv)
        {
            $requete = "select * from vehicule where idv=:idv";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idv'=>$idv
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

		


	}
?>