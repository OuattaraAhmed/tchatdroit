 <?php 
function email_av($email_avocat_rdv,$date_rdv){
        global $conn;
        $e = array('email_avocat_rdv' => $email_avocat_rdv,
          'date_rdv' => $date_rdv
      );
        $sql = 'SELECT * FROM client WHERE email_avocat_rdv = :email_avocat_rdv && date_rdv=:date_rdv';
        $req = $conn->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);

        return $free;
    }

 function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }


if (isset($_POST['mis'])){
    

  $email_avocat_rdv = $_POST['email_avocat_rdv'];
  $date_rdv = $_POST['date_rdv'];
  
   /* on test si les champ sont bien remplis */
    if(verifie($_POST['email_avocat_rdv'])and verifie($_POST['date_rdv'])){
      // 
        $seq=$conn->query("SELECT * FROM client WHERE email ='{$email_avocat_rdv}'");
        $tab=array();
foreach ($seq as $key) {
  $tab[]=$key;
}

if ($key['fonction']=='avocat') {
  

      // 

      if (email_av($email_avocat_rdv,$date_rdv) <= 1) {
        $statut='P';
             
   $sq="UPDATE client SET email_avocat_rdv='{$email_avocat_rdv}',statut = '{$statut}',date_rdv='{$date_rdv}' WHERE id_ar ='{$id_ar}'";
 $sql=$conn->query($sq);
                if ($sql) {
                  $success='rdv programmé avec success';
                }else 
                  $error='dommage';

  }else  $error="ce avocat est assez occupé le ".$date_rdv." Veuillez choisir un autre avocat ou changer de date";
// 
    }else $error= "ce mail ne correspond a aucun avocat"; 
  // 
}else $error= "Veuillez saisir tous les champs !"; 
    
}


?>


<?php 


 ?>