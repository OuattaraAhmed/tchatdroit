
 <?php include("admin2.php") ?>
<body style="opacity: 0.95">
	<!-- <h1>Ajout d'avocat</h1> -->
	<?php include("admin.php") ?>
	<br>
	<a href="index.php">Acceuil</a>


<section>
	
 <form action="" method="POST" class="container col-md-6" style="padding-top:3%;padding-bottom:5%;background-color: white; margin-top: 6%;border-radius: 50px" id="full_lois">

	<div id="messages" style=""></div>

<div class="row">
	<div class="col-md">
		<h5 for="" class="form-label text-primary">Preocupation : </h5>
		<input type="text" name="preocupation" id="preocupation">
	</div>
<br>
	<div class="col-md">
		<h5 for="" class="form-label text-primary">Lois : </h5>
		<textarea name="lois" id="lois" style="height:100%;width:90%"></textarea>
	</div>
<br>
</div>

<br>
 <button type="submit" class=" btn btn-primary" id="mysubmit" name="vsend" value="send"> Valider </button>
 
</form>


</section>

<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/auth3.js"></script>
