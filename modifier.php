

<?php
    include_once '../model/vehicule.php';
    include_once '../controlleur/vehiculeC.php';

    $error = "";

    // create adherent
    $vehicule = null;

    // create an instance of the controller
    $vehiculeC = new vehiculeC();
    if (
        //isset($_POST["idv"]) &&
		isset($_POST["marque"]) &&		
        isset($_POST["modele"]) &&
		isset($_POST["annee"]) && 
        isset($_POST["prix"])&&
        isset($_POST["image"])
       // isset($_POST["rating"])
        //isset($_POST["disponibilite"])

    ) {
        if (
            //!empty($_POST["idv"]) && 
			!empty($_POST['marque']) &&
            !empty($_POST["modele"]) && 
			!empty($_POST["annee"]) && 
            !empty($_POST["prix"])&&
            !empty($_POST["image"])
            //!empty($_POST["rating"])
            //!empty($_POST["disponibilite"])

        ) {
            $vehicule = new vehicule(
               // $_POST['idv'],
				$_POST['marque'],
                $_POST['modele'], 
				$_POST['annee'],
                $_POST['prix'],
                $_POST['image']
                //$_POST['rating']
                //$_POST['disponibilite']
            );
            $vehiculeC->modifieradherent($vehicule, $_POST["idv"]);
            header('Location:affichagev.php');
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
    <head><link rel="stylesheet" href="styleajout.css"></head>
</head>
    <body>
    <div class="foto">
                <img src="jjjj.png" alt="image" height="600" width="1300">
            </div>
        <button><a href="affichagev.php">Retour à la liste des vehicules</a></button>


        <button><a href="pagevehicule.php">Vehicule</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idv'])){
				$vehicule = $vehiculeC->recupereradherent($_POST['idv']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idv">idv:
                        </label>
                    </td>
                    <td><input type="text" name="idv" id="idv" value="<?php echo $vehicule['idv']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="marque">marque:
                        </label>
                    </td>
                    <td><input type="text" name="marque" id="marque" value="<?php echo $vehicule['marque']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="modele">modele:
                        </label>
                    </td>
                    <td><input type="text" name="modele" id="modele" value="<?php echo $vehicule['modele']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="annee">annee:
                        </label>
                    </td>
                    <td><input type="text" name="annee" id="annee" value="<?php echo $vehicule['annee']; ?>" maxlength="20"></td>
                </tr>

                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" value="<?php echo $vehicule['prix']; ?>" maxlength="20"></td>
                </tr>

                <tr>
                    <td>
                        <label for="image">image:
                        </label>
                    </td>
                    <td><input type="text" name="image" id="image" value="<?php echo $vehicule['image']; ?>" maxlength="20"></td>
                </tr>


                <!--<tr>
                    <td>
                        <label for="rating">rating:
                        </label>
                    </td>
                    <td><input type="text" name="rating" id="rating" value="<?php echo $vehicule['rating']; ?>" maxlength="20"></td>
                </tr>-->


                <!--<tr>
                    <td>
                        <label for="disponibilite">disponibilite:
                        </label>
                    </td>
                    <td><input type="text" name="disponibilite" id="disponibilite" value="<?php //echo $vehicule['disponibilite']; ?>" maxlength="20"></td>
                </tr>-->



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