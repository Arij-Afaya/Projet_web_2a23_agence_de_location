<?php
	include '../controlleur/vehiculeC.php';
	$vehiculeC=new vehiculeC();
	$vehiculeC->supprimervehicule($_GET["idv"]);
	header('Location:affichagev.php');
?>