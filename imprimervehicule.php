<?PHP
    include "../controlleur/vehiculeC.php";
	//include "../../controller/categorieC.php";
    require_once "../config.php";
	$vehiculeC = new vehiculeC();
	$listeAdherents=$vehiculeC->afficheradherents();
	//$categorieC = new categorieC();
	//$listecategorie=$categorieC->affichercategorie();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<a class="logo" href="showProduit.php">-->

        <link rel="stylesheet" href="styleaffichage.css">
        
        </a>
		<title> LISTE DES VEHICULES </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
            <th>idv_______________________________________</th>
				<th>marque_______________________________________</th>
				<th>modele_______________________________________</th>
				<th>annee_________________________________</th>
				<th>prix__________________</th>
                <th>image__________________</th>

                <th>Disponibilite_____________________</th>


				
			</tr>
			<?PHP
				//foreach ($listecategorie as $categorie){
			?>

			<?PHP
				foreach ($listeAdherents as $vehicule){
			?>
            		<tr>
                    <td><?php echo $vehicule['idv']; ?></td>
				<td><?php echo $vehicule['marque']; ?></td>
				<td><?php echo $vehicule['modele']; ?></td>
				<td><?php echo $vehicule['annee']; ?></td>
				<td><?php echo $vehicule['prix']; ?></td>
                <td><img src=<?php echo $vehicule['image'];  ?> alt="" height="250" width="250" <?php echo $vehicule['marque'];  ?> /></td>
                <td><?php echo $vehicule['disponibilite']; ?></td>
					
					
				</tr>
			<?PHP
				}
			?>

            <!--<?PHP
				//}
			?>-->
			
		</table>
	</body>
</html>