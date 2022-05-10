<?php
	include '../controlleur/ReservationC.php';
	$reservationC=new reservationC();
	$reservationC->supprimerreservations($_GET["id_r"]);
	header('Location:affichagereservationback.php');
?>