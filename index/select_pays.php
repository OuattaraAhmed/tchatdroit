

<!-- <?php include("admin2.php");?> -->

<div class="col-md-9">
	<form action="" method="POST" id="form-search">
       <SELECT name="specialite" size="1" id="specialite" >
<OPTION>choisir une option 
	<OPTION>divorce
<OPTION>marriage
	<OPTION>immobilier
<OPTION>titre foncier
	<OPTION>sante
</SELECT>

 
				<button type="submit" class=" btn btn-primary" id="mysubmit"  name="search" value="search">search </button>

			
				
				</form>

</div>
<!-- <?php include("inc/footer.php") ?> -->


 <?php 
 
 $conn = new PDO("mysql:host=localhost; dbname=avocat", "root", "");
 $opt="choisir une option";
 $table = null; 

if (isset($_POST)) {
	
	$specialite=isset($_POST['specialite'])?$_POST['specialite']:null;
$message='';

	if ($specialite!=$opt){
		$tab=array();
$none='';
$count = 1;
$avo='avocat';
		
              	$search=$conn->query("SELECT * FROM client WHERE fonction ='{$avo}' && pays ='{$pay}'");
?>
<br>
<h6>
<?php
 echo (isset($specialite)) ? "Theme ".$specialite: ''; 
$searc=$search->fetchAll();
?>
</h6>
<br>
<?php
$tab=array();
foreach ($searc as $row) {
	$tab=$row;


$newtab=explode(',', $row['specialite']);

			if (in_array($specialite, $newtab)) {
				$result= $row['email'];
			}else $result=$none; 

			if ($result!=$none) {
				?>
				<div style="width: 15%">
				<table class="table movie-table">
               
				<?php
//****affichage des avocat en fonction du lieu si e rdv est presentiel

// *****
$search=$conn->query("SELECT * FROM client WHERE email ='{$result}' AND pays ='{$pay}'");

$tab=array();
$searc=$search->fetchAll();

    ?>

               
               <?php foreach ($searc as $row): ?>   
              
                <tr>
                    <th><?=$count++?></th>
                    <td><?= $row['nom']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['ville']?></td>                               
                </tr>
            <?php endforeach ?>
           
            </table>
            </div>
 <?php                   
 

}
// 

}
    
} else $message= "veuillez choisir une option svp!";
}
 ?>
 <p style="color: red"><?php echo (isset($message)) ? $message : ''; ?></p> 

