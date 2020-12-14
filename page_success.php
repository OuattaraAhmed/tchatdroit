 <?php include("inc/header.php") ?>
<body style="background-image:url('img/droit.jpg');">
	<div style="margin: 15%; background-color: white;padding: 5%">
		<?php 
		if (isset($_SESSION['pres_code'])) { ?>

			<h3>Votre RenDez-Vous presentiel a été enregistré avec success,

votre identifiant est <strong><em style="color: red"><?=$_SESSION['pres_code']  ?></em></strong>.

 Nous vous contacterons pour vous informer de la date</h3>
<!-- **** -->
	<?php	} else{

		 ?>
		 <!-- ****** -->
<h3>Votre Rendez-Vous en ligne a été enregistré avec success,

votre code du Tchat est <strong><em style="color: red"><?=$_SESSION['code_rdv']  ?></em></strong>.

 Nous vous contacterons pour vous informer de la date</h3>
<?php } ?>
<button type="submit" class="btn btn-primary" id="mysubmit" name="send" value="send"><a style="text-decoration:none;color: white"; href="log_page_success.php"> Ok </a></button>
</div>
<br><br>

<?php include("inc/footer.php") ?>
