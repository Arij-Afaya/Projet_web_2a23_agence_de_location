<?php
	include '../controlleur/reponsec.php';
	$reponsec=new reponsec();
	$reponsec->supprimerreponse($_GET["id_r"]);
	header('Location:afficherListereponses.php');
?>