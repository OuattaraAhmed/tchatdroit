 <?php include("inc/header.php");
$id_ar=$_GET['rdv'];
// var_dump($_GET['rdv']);
 ?>


	
<?php 
$conn = new PDO("mysql:host=localhost; dbname=mi_avocat", "root", "");

$select=$conn->query("SELECT * FROM client WHERE id_ar ='{$id_ar}'");
$user = array();
foreach ($select as $key) {
	$user[]=$key;
}
 ?>
 <body>
 <!-- champ de programmation de rendez-vous -->
<section style=" padding:7%; background-color:#34495e">
<div class="row" style="border-radius: 10%">
	
<div class="col-md-8 pr-4" style="padding: 3%; background-color: white;">
	<div class="row">
		<?php 
		$tpv="";
if ($key['type_rdv']=="presentiel (50.000)") {
	$tpv="ok";
}

		 ?>
		<h5>
		<?php echo (!empty($tpv)) ? "Rdv presentiel, Ville: ".$key['ville'] : "Rdv en ligne"; ?>
	</h5>
		
	</div>

	<div class="row" style="background-color: #f0f0f4;padding: 10px">
		<div class="col-3">
			<u><h6>decription du probleme : </h6></u>
		</div>	
	<div class="col-8">
		<?= $key['description']; ?>
			</div>

		</div>
		<br>
		<br>
		<?php include("trait_create_rdv.php") ?>
<strong style="color: red"><?php echo (isset($error)) ? $error : ''; ?></strong>
	<strong style="color: blue"><?php echo (isset($success)) ? $success : ''; ?></strong>
	<br>
	<br>
<div class="row">
	
	<form action="" method="POST" id="create">
		<div id="message"></div>
		<div class="col md-6">
		<label for="" class="form-label text-primary">email de l'avocat</label>
		<input type="email" name="email_avocat_rdv" id="full_tel">
	    </div>

	<div class="col md-6">
		<label for="" class="form-label text-primary">date de rendez-vous</label>
		<input type="date" name="date_rdv" id="date_rdv">
	</div>

<button type="submit" class=" btn btn-primary" id="mysubmit" name="mis" value="send"> mettre a jour </button>
	</form>

	</div>
</div>

<!-- ******************************** -->
<!-- champ  de recherche de probable avocat -->

<div class="col-md-4"> 
	<div style="padding: 3%; background-color: white; border-width: 5px;">
		<?php 
	$pay=$key['pays'];
	$ville=$key['ville'];
 $rdv_typ=$key['type_rdv'];
 // ************************************************
 // var_dump($ville);
 // var_dump($pay);
 // var_dump($rdv_typ);
 $rdv_pre="presentiel (50.000)";
 ?>
	<?php
	if ($rdv_typ==$rdv_pre) {

		 include("select_pays.php");
	}else{
	 include("select.php");
	 }
	  ?>
<a href="gestion_rdv.php">retour</a>
</div>
</div>

</div>
</section>


<?php include("inc/footer.php") ?>