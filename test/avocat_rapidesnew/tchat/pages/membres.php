    <body style="background-image:url('../img/Tchat.jpg');">
    <section style="padding: 2%;margin: 11%; background-color: white; border-radius: 6px">

    <?php
    // pour empecher l'utilisateur de saisir directement dans l'onglet la page membre pour y acceder
  // si jamais l'utilisateur est deconnecté et tente d'aller vers la page membre on doit le rediriger sur la page de connection
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
    // ************************************************
    // var_dump($_SESSION['tchat']);
    // var_dump($_SESSION['code_rdv']);
    // var_dump($_SESSION['email']);
    $verif='avocat';
    $earch=$db->query("SELECT fonction FROM client WHERE email ='{$_SESSION['email']}'");
$earc=$earch->fetchAll();
// pour chaque resultat trouvé
foreach ($earc as $key) {
    $ear=$key['fonction'];
}
if ($ear==$verif) {
    ?>
<div class="row" style="padding-left: 60%;">
    <a href="../avocat_profil.php"><em style="padding:10px;color: white;background-color: #34495e;border-radius: 20px">mon profil</em></a>

    <a href="../avocat_agenda.php"><em style="padding:10px;color: white;background-color: #34495e;border-radius: 20px">mon agenda</em></a>
</div>
         <?php

}
    // 
        //***********en fonction du statut de la specialité {null ou pas} =>determiner la fonction de la personne venant de se connecter {avocat ou users} afin de limiter son acces a certains membres
$none='';
$date_du_jour=date("Y-m-d");
$id=$_SESSION['tchat'];
$code=$_SESSION['code_rdv'];
$mail=$_SESSION['email'];
$statut='P';

$search=$db->query("SELECT specialite FROM client WHERE email ='{$mail}'");
$searc=$search->fetchAll();
//  la boucle foreach permet d'afficher tous ce qu'il y'a dans le tableau
foreach ($searc as $key) {
    $sear=$key['specialite'];
}

# si l'utilisateur venant de se connecter est un avocat
if ($sear!=$none) {
    
?>

<h2 class="header">Tous les membres du jour</h2>
<?php
//  la boucle foreach permet d'afficher tous ce qu'il y'a dans le tableau
// si jamais l'adresse id du membre est diff de la variable de session active alors j'affiche dans le cas contraire rien on affiche le nom de l'utilisateur
    foreach(get_membres() as $membre){

        // afficher grâce à la fonction get_membre, les membre dont l'id est different de session tchat qui est en realité l'id de l'avocat qui vient de se connecté
        if($membre->id_ar != $_SESSION['tchat']){
            // *****
            #email de l'avocat du rdv des membres trouvés dans la page membres doit etre identiques au mail de l'avocat connecté

            //affiche les membre dont l'email de leur rdv = l'email de l'avocat qui vient de se connnecté
if ($membre->email_avocat_rdv == $_SESSION['email']) {
    #date du rendez-vous des membres trouvés dans la page membres se doit d'etre identique a la date du jour

    // affiche les clients dont la date de leur rdv = date today
   if ($membre->date_rdv ==$date_du_jour) {
    #statut des membres trouvés dans la page membres se doit d'etre = [P]=>Progammer

    //  affiche les clients dont dans le champs statut on a p qui est  devant leur nom 
       if ($membre->statut ==$statut) {
         
       // ********afficher uniquement les rendez-vous en ligne
        $presentiel="presentiel (50.000)";
        if ($membre->type_rdv !=$presentiel){
            // *****
            ?>
                <div class="membre">
                    <strong><?= $membre->nom ?></strong><br/><br/>
                    <span><?= $membre->raison ?></span><br/>
                    <a class="select" href="index.php?page=tchat&user=<?= $membre->id_ar ?>"><span class="i-user"></span></a>
                </div>

            <?php
       }

       }
   }
}
        }

    }
    
}
    // *********************************

#l'utilisateur venant de se connecter est un users
else {
// ****************
    ?>

    
<!-- j'ai fait xa  -->
    <?php
$dselect=$db->query("SELECT email_avocat_rdv,date_rdv FROM client WHERE email ='{$mail}' && statut = '{$statut}' && code_rdv='{$code}' ");
$dsele=$dselect->fetchAll();
foreach ($dsele as $day) {
    $dspec=$day['date_rdv'];
    $espec=$day['email_avocat_rdv'];

  }  
  // si la date de rdv et l'email de rdv du client existe
if (isset($dspec)&&isset($espec)) {
    // si la date de rdv = la date d'aujourd'huit
    if ($dspec==$date_du_jour) {
?>
<h2 class="header">L'avocat chargé de vous recevoir</h2>
<?php
    // ***********

// affiche grâce à cette mm fonction get_membres() tous les personnes(membres) dont l'id est different de session tchat qui est l'id du client
    foreach(get_membres() as $membre){
        if($membre->id_ar != $_SESSION['tchat']){
            // *****

            // faire une autre restriction pour afficher la liste des membres dont l'email = l'email de avocat_rdv du client qui est connecté
if ($membre->email == $espec) {
            // *****
                ?>
                <div class="membre">
                    <strong><?= $membre->nom ?></strong><br/>
                    <span><?= $membre->email ?></span><br/>
                    <a class="select" href="index.php?page=tchat&user=<?= $membre->id_ar?>"><span class="i-user"></span></a>
                </div>

            <?php          
}
            
        }

    }

    // ****************
}else if ($dspec!=$date_du_jour) {
        
    ?>
                <div style="margin:3%; background-color: white;">
        <h1>
           Votre rendez vous n'est pas pour aujourd'huit, Veuillez reessayer le <strong><em style="color: red"><?=$dspec ?></em></strong> <p>la date ne vous convient pas? Contacter le +225 ....</p>
         </h1>
         <strong style="border-radius: 7px;background-color: #34495e;padding: 1%;color: white"><a href="index.php?page=logout" style="text-decoration: none;color: white">ok</a></strong>
   </div> 

            <?php

    }
        
    // en fonction du statut determiner la nature rendez vous au cas ou il n'a pas access aux membres
    
}else{

 $dseect=$db->query("SELECT * FROM client WHERE code_rdv='{$code}' ");
$dsee=$dseect->fetchAll();
$user = array();
foreach ($dsee as $key) {
    $user[]=$key;
    }
   
if ($key['statut'] =='R') {
    ?>
                <div style="margin:3%; background-color: white;color: red">
        <h1>
           ce code n'est pas valide,Ce rdv en ligne a deja été effectuez.....
         </h1>
   </div> 

            <?php

}elseif ($key['statut'] =='M') {
     ?>
                <div style="margin:3%; background-color: white;">
        <h1>
           Code non valide, vous aviez  manquez ce rdv qui etait prevu pour le <strong><em style="color: red"><?=$key['date_rdv'] ?></em></strong> <p>voudrez vous reprogramer le rdv ?.... Contacter le +225 ....</p>
         </h1>
         <strong style="border-radius: 7px;background-color: #34495e;padding: 1%;color: white"><a href="index.php?page=logout" style="text-decoration: none;color: white">ok</a></strong>
   </div> 

            <?php

}elseif  ($key['statut'] =='N'){
    ?>
                <div style="margin:3%; background-color: white;">
        <h1>
           Soyez Patient, nous vous contacterons pour vous informer de la date du rdv
         </h1>
         <strong style="border-radius: 7px;background-color: #34495e;padding: 1%;color: white"><a href="index.php?page=logout" style="text-decoration: none;color: white">ok</a></strong>
   </div> 

            <?php

}
} 
    // ***********
    
}

?>

</section>
<br>
<br>
</body>