
 <?php include("admin2.php") ?>
<body style="pacity: 0.95">

<?php include("admin.php") ?>
    
    <a href="index.php">Acceuil</a>


<section>
    
 <form action="" method="POST" id="full_avocat">

    
    <div class="container col-md-6"style="padding-bottom:3%;padding-top:3%;background-color: white; margin-top: 6%;border-radius: 50px">
        <div id="messages" style=""></div>
<div class="row">
    <div class="col-md-4">
        <h5 for="" class="form-label text-primary">nom : </h5>
        <input type="text" name="nom" id="nom">
    </div>
<br>
    <div class="col-md-4">
        <h5 for="" class="form-label text-primary">e-mail : </h5>
        <input type="email" name="email" id="email">
    </div>
<br>
   <div class="col-md-4">
        <h5 for="" class="form-label text-primary">Votre Pays : </h5>
        <SELECT name="pays" size="1">
<OPTION>Choisir une option          
<OPTION>Ivory Coast
<OPTION>Ghana
    <OPTION>togo
        <OPTION>Benin
            <OPTION>afrique du sud
</SELECT>
    </div> 
</div>
    <br>
<div class="row">
    <div class="col-md-4">
        <h5 for="" class="form-label text-primary">specialite : </h5>
        <input type="text" name="specialite" id="specialite">
    </div>
<br><div class="col-md-4">
        <h5 for="" class="form-label text-primary">Ville : </h5>
        <input type="text" name="ville" id="specialite">
    </div>
</div>

<br>
<br>
 <button type="submit" class=" btn btn-primary" id="mysubmit" name="vsend" value="send"> Valider </button>
 </div>
 </div>
</form>

</section>

<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/auth2.js"></script>
