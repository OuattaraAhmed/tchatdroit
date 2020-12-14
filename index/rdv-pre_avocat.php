<?php 
$conn = new PDO("mysql:host=localhost; dbname=avocat", "root", "");
$none='';
$date_du_jour=date("Y-m-d");
$id=$_SESSION['tchat'];
$code=$_SESSION['code_rdv'];
$mail=$_SESSION['email'];
$statut='P';

function get_membres(){
        global $conn;
        $req = $conn->query("SELECT * FROM client");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }

    foreach(get_membres() as $membre){
        if($membre->id_ar != $_SESSION['tchat']){
            // *****
            #email de l'avocat du rdv des membres trouvés dans la page membres doit etre identiques au mail de l'avocat connecté
if ($membre->email_avocat_rdv == $_SESSION['email']) {
    #date du rendez-vous des membres trouvés dans la page membres se doit d'etre identique a la date du jour
   if ($membre->date_rdv ==$date_du_jour) {
    #statut des membres trouvés dans la page membres se doit d'etre = [P]=>Progammer
       if ($membre->statut ==$statut) {
         
       // ********
        $presentiel="presentiel (50.000)";
        if ($membre->type_rdv ==$presentiel){
            // *****
            ?>
            <div class="container card-body col-md-4" style="padding: 1%;color: white;background-color: #34495e;border-radius: 30px">
                <div class="membre">
                    <h5 style="">Rendez-Vous presentiel du jour/a revoir</h5>
                    <u>nom</u> :  <strong><?= $membre->nom ?></strong><br/>
                    <u>telephone</u> :  <strong><?= $membre->tel ?></strong><br/>
                    <u>ville</u> :  <strong><?= $membre->ville ?></strong><br/>
                    <u>code</u> :  <strong><?= $membre->pres_code ?></strong><br/>
                    
                </div>
                </div>
            <?php
       }

       }
   }
}
        }

    }