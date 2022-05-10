<?php
    include_once '../model/reponse.php';
    include_once '../controlleur/reponseC.php';

    $error = "";

    // create adherent
    $reponse = null;

    // create an instance of the controller
    $reponsec = new reponseC();
    if (
        isset($_POST["id_r"]) &&
		isset($_POST["date_r"]) &&		
        isset($_POST["reponse_r"]) 
    ) {
        if (
            !empty($_POST["id_r"]) && 
			!empty($_POST['date_r']) &&
            !empty($_POST["reponse_r"])
            
        ) {
            $reponse = new reponse(
                $_POST['id_r'],
				$_POST['date_r'],
                $_POST['reponse_r']
            );
            $reponsec->modifierreponse($reponse, $_POST["id_r"]);
            header('Location:afficherListereponses.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localuxe</title>
</head>
    <body>
        <button><a href="afficherListereponses.php">Retour à la liste des reponses</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id_r'])){
				$reponse = $reponsec->recupererreponse($_POST['id_r']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_r">Identifiant:
                        </label>
                    </td>
                    <td><input type="text" name="id_r" id="id_r" value="<?php echo $reponse['id_r']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="date_r">Date de réponse:
                        </label>
                    </td>
                    <td><input type="date" name="date_r" id="date_r" value="<?php echo $reponse['date_r']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="reponse_r">Reponse:
                        </label>
                    </td>
                    <td><input type="text" name="reponse_r" id="reponse_r" value="<?php echo $reponse['reponse_r']; ?>" maxlength="20"></td>
                </tr>
                
                            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>