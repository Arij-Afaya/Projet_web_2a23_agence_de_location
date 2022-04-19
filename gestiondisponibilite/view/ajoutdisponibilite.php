<?php

    include_once '../model/disponibilite.php';
    include_once '../controlleur/disponibiliteC.php';

    $error = "";

    // create disponibilite
    $disponibilite = null;

    // create an instance of the controller
    $disponibiliteC = new disponibiliteC();
    if (
       // isset($_POST["idd"]) &&
		isset($_POST["categoried"]) &&		
        isset($_POST["dated"]) &&
		isset($_POST["dated"])
    ) {
        if (
            //!empty($_POST["idd"]) && 
			!empty($_POST['categoried']) &&
            !empty($_POST["dated"]) && 
			!empty($_POST["dated"]) 
        ){
            $disponibilite = new disponibilite(
                //$_POST['idd'],
				$_POST['categoried'],
                $_POST['dated'], 
				$_POST['dated']
            );
            $disponibiliteC->ajouterdisponibilite($disponibilite);
            header('Location:affichagedisponibilite.php');
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
    <div class="logo">
                <img src="logo.png" alt="image" height="50" width="180">
            </div>

            <div class="foto">
                <img src="jjjj.png" alt="image" height="600" width="1300">
            </div>

        <button><a href="affichagedisponibilite.php">Retour à la liste des exclusivites disponibles</a></button>
        <button><a href="pagevehicule.php">Vehicule</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<!--<tr>
                    
                    <td>
                        <label for="idd">idd:
                        </label>
                    </td>
                    <td><input type="number" name="idd" id="idd" maxlength="20"></td>
                </tr>-->
                <tr>
                    <td>
                        <label for="categoried">categoried:
                        </label>
                    </td>
                    <td><input type="text" name="categoried" id="categoried" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="dated">dated:
                        </label>
                    </td>
                    <td><input type="date" name="dated" id="dated" ></td>
                </tr>

                <tr>
                    <td>
                        <label for="datef">datef:
                        </label>
                    </td>
                    <td><input type="date" name="datef" id="datef" ></td>
                </tr>


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
