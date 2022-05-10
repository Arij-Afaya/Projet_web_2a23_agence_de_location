<?php
    include_once '../model/disponibilite.php';
    include_once '../controlleur/disponibiliteC.php';

    $error = "";

    // create disponibilite
    $disponibilite = null;

    // create an instance of the controller
    $disponibiliteC = new disponibiliteC();
    if (
        //isset($_POST["idd"]) &&
		isset($_POST["categoried"]) &&		
        isset($_POST["dated"]) &&
		isset($_POST["datef"]) 
    ) {
        if (
            //!empty($_POST["idd"]) && 
			!empty($_POST['categoried']) &&
            !empty($_POST["dated"]) && 
			!empty($_POST["datef"]) 
        ) {
            $disponibilite = new disponibilite(
               // $_POST['idd'],
				$_POST['categoried'],
                $_POST['dated'], 
				$_POST['datef']
            );
            $disponibiliteC->modifierdisponibilite($disponibilite, $_POST["idd"]);
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
    <div class="foto">
                <img src="jjjj.png" alt="image" height="600" width="1300">
            </div>
        <button><a href="affichagedisponibilite.php">Retour à la liste des disponibilites exclusives</a></button>


        <button><a href="pagedisponibilite.php">disponibilite</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idd'])){
				$disponibilite = $disponibiliteC->recupererdisponibilite($_POST['idd']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idd">idd:
                        </label>
                    </td>
                    <td><input type="text" name="idd" id="idd" value="<?php echo $disponibilite['idd']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="categoried">categoried:
                        </label>
                    </td>
                    <td><input type="text" name="categoried" id="categoried" value="<?php echo $disponibilite['categoried']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="dated">dated:
                        </label>
                    </td>
                    <td><input type="date" name="dated" id="dated" value="<?php echo $disponibilite['dated']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="datef">datef:
                        </label>
                    </td>
                    <td><input type="date" name="datef" id="datef" value="<?php echo $disponibilite['datef']; ?>" maxlength="20"></td>
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