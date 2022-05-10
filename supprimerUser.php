<?php
	include '../controlleur/userC.php';
	$userC=new userC();
	$userC->supprimeruser($_GET["id"]);
	header('Location:afficherUser.php');
?>