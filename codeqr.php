<?php

include('./phpqrcode/qrlib.php');
require_once '../controlleur/vehiculeC.php';

$vehiculeC = new vehiculeC();
$vehicule= $vehiculeC->getcommandebynum($vehicule['idv']);

    $param = $_GET['marque']; // remember to sanitize that - it is user input!
    
    // we need to be sure ours script does not output anything!!!
    // otherwise it will break up PNG binary!
    
    ob_start("callback");
    
    // here DB request or some processing
    $codeText = 'la marque et le modele sont '.$param.'';
    
    // end of processing here
    $debugLog = ob_get_contents();
    ob_end_clean();
    
    // outputs image directly into browser, as PNG stream
    QRcode::png($codeText);

