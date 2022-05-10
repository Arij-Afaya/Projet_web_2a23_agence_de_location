<?php
	include '../controlleur/sponsorsC.php';
	$sponsorsC=new sponsorsC();
	$sponsorsC->supprimersponsors($_GET["id_s"]);
	header('Location:projects-fullwidth-nourhene.php');
?>