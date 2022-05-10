<?php
  //require 'config.php';
  $objectPdo = new PDO('mysql:host=localhost;gestionve', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT Titre,Description,DateD,DateF,Image FROM event ORDER BY Id ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeEvents= $pdoStat->fetchAll(); 

 ?>





  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        <?php
	include '../controlleur/reclamationc.php';
	$reclamationc=new Reclamationc();
	$listereclamations=$reclamationc->afficherreclamation(); 
?>
<html>
	<head></head>
	<body>
		<center><h1>Liste des reclamations</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>type_c</th>
				<th>message_c</th>
				<th>date_c</th>
				
			</tr>
			<?php
				foreach($listereclamations as $reclamation){
			?>
			<tr>
				<td><?php echo $reclamation['id']; ?></td>
				<td><?php echo $reclamation['type_c']; ?></td>
				<td><?php echo $reclamation['message_c']; ?></td>
				<td><?php echo $reclamation['date_c']; ?></td>

				
				
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>






        </address>
      </div>
      <div class="row">
                <div class="col-lg-12">
                  
                        <img src="../images/favicon-0" alt="#">
                     
                    </div>
                </div>
      <br>
      <!-- /.col -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
      