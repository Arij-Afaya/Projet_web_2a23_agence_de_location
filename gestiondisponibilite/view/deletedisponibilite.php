<?php
	include '../controlleur/disponibiliteC.php';
	$disponibiliteC=new disponibiliteC();
	$disponibiliteC->supprimerdisponibilite($_GET["idd"]);
	header('Location:affichagedisponibilite.php');
?>