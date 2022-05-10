<?php
	include '../controlleur/evenementC.php';
	$evenementC=new evenementC();
	$evenementC->supprimerevenement($_GET["id_e"]);
	header('Location:projects-classic-nourhene.php');
?>