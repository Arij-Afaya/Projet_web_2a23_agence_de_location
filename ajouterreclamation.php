<?php
    include_once '../model/reclamation.php';
    include_once '../controlleur/reclamationc.php';

    $error = "";

    // create adherent
    $reclamation = null;

    // create an instance of the controller
    $reclamationc = new reclamationc();
    $reclamationc = new reclamationc();
    if (
        
		isset($_POST["type_c"]) &&		
        isset($_POST["message_c"]) && 
        isset($_POST["date_c"])
    ) {
        if (
            
			!empty($_POST['type_c']) &&
            !empty($_POST["message_c"]) && 
            !empty($_POST["date_c"])
        ) {
            $reclamation = new reclamation(
               
				$_POST['type_c'],
                $_POST['message_c'], 
                $_POST['date_c']
            );
            $reclamationc->ajouterreclamation($reclamation);
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
    <title>Localuxe</title>
</head>
    <body>
        <button><a href="afficherListereclamations.php">Retour à la liste des reclamations</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
               
            <tr>
                    <td>
                        <label for="id"><strong>Identifiant</strong>:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" maxlength="50"></td>
                </tr>

              


				<tr>
                    <td>
                        <label for="type_c"><strong>Type</strong>:
                            
                            <input type="radio" name="Type" id="Type" value="vehicule" checked=""><label for="vehicule">vehicule
							</label>
							<input type="radio" name="Type" id="Type" value="paiement"><label for="paiement">Paiement
							</label>
                        </label>
                    </td>
                   
               
                <tr>
                    <td>
                        <label for="message_c"><strong>Message</strong>:
                        </label>
                    </td>
                    <td><input type="text" name="message_c" id="message_c" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date_c"><strong>Date de Réclamation</strong>:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_c" id="date_c" >
                    </td>
                </tr>  
                        </fieldset>       
                <tr>
                    <td></td>
						
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>