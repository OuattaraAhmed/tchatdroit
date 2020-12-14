 

<?php include("admin2.php") ?>
<body style="opacity: 0.95">

<?php include("admin.php") ?>


 <!--  -->
 <?php 
 $conn = new PDO("mysql:host=localhost; dbname=mi_avocat", "root", "");
 $N = 'N';
     $exep="";
     $sql="SELECT * FROM client WHERE statut = '{$N}' ";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
    $count = 1;
  ?>
  <section class="container" style="background-color: white">
  <h2 style="text-align: center; color: #34495e; margin-top: 13%;">Nouveaux Rendez-Vous Enregistrés</h2>
  <br>
<div class="container" style="margin-left: 100px; margin-right:100px;">
    <div class="table-responsive">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>N°</th>
                      <th>Nom du client</th>
                      <th>raison</th>
                      
                      <th colspan="2">Action</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
                <tr>
                    <th><?=$count++?></th>
                    <td><?= $row['nom']?></td>
                <td><?= $row['raison']?></td>
                
                      <td>
                        
              <button class="btn btn-primary"><a href="create_rdv.php?rdv=<?php echo $row['id_ar']?>" style="text-decoration: none; color: white;" >programmer un rdv</a></button>


                      </td>                                       
                </tr>
            <?php endforeach ?>
            
              </tbody>
            </table>
            </div>
</div>
</section>
<br><br>

     
<?php include("inc/footer.php") ?>