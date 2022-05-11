<?php
	include '../controlleur/reclamationc.php';
	$reclamationc=new Reclamationc();
	$listereclamations=$reclamationc->afficherreclamation(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterreclamation.php">Ajouter une reclamation</a></button>
		<center><h1>Liste des reclamations</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>type_c</th>
				<th>message_c</th>
				<th>date_c</th>
				<th>Repondre</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listereclamations as $reclamation){
			?>
			<tr>
				<td><?php echo $reclamation['id']; ?></td>
				<td><?php echo $reclamation['type_c']; ?></td>
				<td><?php echo $reclamation['message_c']; ?></td>
				<td><?php echo $reclamation['date_c']; ?></td>

				<td>
					<form method="POST" action="modifierreclamation.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimerreclamation.php?id=<?php echo $reclamation['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>




