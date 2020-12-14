  <!-- client.php -->
  <?php include("inc/header.php") ?>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
<body style="background-image:url('img/wave.png');">
  <h1 class="text-light">Prendre un Rendez- Vous</h1>
  <br>
  

<section class="container md-6" style="background-color:#34495e;">
  <br>
  <br>
<form action="" method="POST" id="full_client">

  <div id="message" ></div>

<div class="row mb-5 ">
    <div class="col md-3">
        <label for="" class="form-label text-light">Nom et prenom</label>
        <input type="text" name="nom" id="full_nom">
    </div>

    <div class="col md-3">
        <label for="" class="form-label text-light">Telephone</label>
        <input type="tel" name="tel" id="full_tel">
    </div>

    <div class="col md-3">
        <label for="" class="form-label text-light">votre e-mail</label>
        <input type="email" name="email" id="full_email">
    </div>

<div class="col md-3">
        <label for="" class="form-label text-light">Votre Ville</label>
        <input type="text" name="ville" id="full_ville">
    </div>

</div>

<div class="row mb-5 ">

    <div class="col md-3">
        <label for="" class="form-label text-light">un Avocat pour</label>
        <input type="text" name="raison" id="full_raison">
    </div>

<!-- ---- -->
<div class="col md-3">
        <label for="" class="form-label text-light">Pays de residence : </label>
        <SELECT name="pays" size="1">
<OPTION>Choisir une option          
<OPTION>Ivory Coast
<OPTION>Ghana
    <OPTION>togo
        <OPTION>Benin
            <OPTION>afrique du sud
</SELECT>
</div>
    <div class="col md-3">
    
        <label for="" class="form-label text-light">type de ren-de-vous :</label>
        <SELECT name="type_rdv" size="1">
            <OPTION>Choisir une option
<OPTION>en ligne (10.000Fr)
<OPTION>presentiel (50.000)
</SELECT>

<!--  -->
 </div>

 <div class="col md-3">
    <div>
        <label for="" class="text-light">Description</label>
        </div>
        <textarea name="description" id="full_description" style="height:100%;width:90%"></textarea>
    </div>
 </div>
 <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> Valider </button>
</form>
<br>
<br>
</section>

<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/auth.js"></script>
