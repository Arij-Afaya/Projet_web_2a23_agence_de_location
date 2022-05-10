<?php
	include '../controlleur/vehiculeC.php';
	$vehiculeC=new vehiculeC();
	$listeAdherents=$vehiculeC->afficheradherents(); 
?>
<html>
	<head><link rel="stylesheet" href="styleaffichage.css"></head>
	<body>
	<div class="logo">
                <img src="jjjj.png" alt="image" height="500" width="1300">
            </div>
	    <button><a href="ajout.php">Ajouter un vehicule</a></button>
		<button><a href="pagevehicule.php">Vehicule</a></button>
		<center><h1>Liste des vehicules </h1></center>
		<table border="1" align="center">
			<tr>
				<th>idv</th>
				<th>marque</th>
				<th>modele</th>
				<th>annee</th>
				<th>prix</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeAdherents as $vehicule){
			?>
			<tr>
			<td><?php echo $vehicule['idv']; ?></td>
				<td><?php echo $vehicule['marque']; ?></td>
				<td><?php echo $vehicule['modele']; ?></td>
				<td><?php echo $vehicule['annee']; ?></td>
				<td><?php echo $vehicule['prix']; ?></td>
				<td>
					<form method="POST" action="modifier.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $vehicule['idv']; ?> name="idv">
					</form>
				</td>
				<td>
					<a href="delete.php?idv=<?php echo $vehicule['idv']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
