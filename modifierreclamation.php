<?php
    include_once '../model/reclamation.php';
    include_once '../controlleur/reclamationC.php';

    $error = "";

    // create adherent
    $reclamation = null;

    // create an instance of the controller
    $reclamationc = new reclamationC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["type_c"]) &&		
        isset($_POST["message_c"]) &&
        isset($_POST["date_c"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['type_c']) &&
            !empty($_POST["message_c"]) && 
            !empty($_POST["date_c"])
        ) {
            $reclamation = new reclamation(
                $_POST['id'],
				$_POST['type_c'],
                $_POST['message_c'], 
                $_POST['date_c']
            );
            $reclamationc->modifierreclamation($reclamation, $_POST["id"]);
            header('Location:afficherListereclamations.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListereclamations.php">Retour à la liste des réclamations</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$reclamation = $reclamationc->recupererreclamation($_POST['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Identifiant:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $reclamation['id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="tpye_c">Type:
                        </label>
                    </td>
                    <td><input type="text" name="type_c" id="type_c" value="<?php echo $reclamation['type_c']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="message_c">Message:
                        </label>
                    </td>
                    <td><input type="text" name="message_c" id="message_c" value="<?php echo $reclamation['message_c']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date_c">Date de réclamation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_c" id="date_c" value="<?php echo $reclamation['date_c']; ?>">
                    </td>
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