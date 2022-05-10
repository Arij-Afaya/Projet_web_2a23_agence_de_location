<?php
    require '../controlleur/userC.php';

    $userC = new userC();
    $userC->supprimeruser($_GET['id']);
    //changer article par user ba3d w badel essemi les fichiers
    header('Location:afficherutilisateur.php');
?>