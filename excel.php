<?php
  require '../controlleur/vehiculeC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_vehicules.com.xls");
$vehiculeC = new vehiculeC();
    $vehiculeS=$vehiculeC->afficheradherents();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
    <th>idv</th>
    <th>marque</th>
    <th>modele</th>
    <th>annee</th>
     <th>prix</th>
     <th>image</th>
    <th>disponibilite</th>
   


  </tr>
  
  <?php 
                foreach($vehiculeS as $vehicule) {
        ?>

                                          <td><?php echo $vehicule['idv']; ?></td>
                                           <td><?php echo $vehicule['marque']; ?></td>
                                          <td><?php echo $vehicule['modele']; ?></td>
                
                                            <td><?php echo $vehicule['annee']; ?></td>
        
                                              <td><?php echo $vehicule['prix']; ?></td>
                                             <td><?php echo $vehicule['image']; ?></td>
                                             <td><?php echo $vehicule['disponibilite']; ?></td>
                                                
                                                </tr>
                                            
                                                </div>
                      </div>
                  </div>

              </div>
              <!-- /.container-fluid -->

          </div>


      <?php
              }
      ?>
</table>