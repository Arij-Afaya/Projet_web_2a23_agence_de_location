<?php
	// header("Content-Type: application/xls");    
	// header("Content-Disposition: attachment; filename=file.xls");  
	// header("Pragma: no-cache"); 
	// header("Expires: 0");

	require_once '../config.php';
	
	
	// $output = "";
	
	// $output .="
	
	// ";
	{
		$config = config::getConnexion();
		
			$querry = $config->prepare('
			select idv as idv , marque as marque  , modele as modele , annee as annee , prix as prix ,image as image  ,disponibilite as disponibilite from vehicule');
			$querry->execute();
			$data = $querry->fetchAll();
			// print_r($data);exit();
			// $datas = array();
	// 		foreach($data as $article)
	// 		{
	// 			$datas[]= array (

					
    //                 'nom'=>$article->getNom(),
    //                 'categorie'=>$article->getCategorie(),
    //                 'description'=>$article->getDescription(),

	// 			);
			require_once 'XLS.php';
		XLS::export($data,'Export fichier');
		}

	

	

	
	// $output .="
	// 		</tbody>
			
	// 	</table>
	// ";
	
	// echo $output;
	
	
?>