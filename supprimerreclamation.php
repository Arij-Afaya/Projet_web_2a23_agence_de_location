<?php
	include '../controlleur/reclamationc.php';
	$reclamationc=new reclamationc();
	$reclamationc->supprimerreclamation($_GET["id"]);
	header('Location:components-article.php');
?>