 <?php
 include("bd.php");
 function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }

$answer= null;

if (isset($_POST))
{
  $message= '';
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$email =  ($_POST['email']);
	$raison = ($_POST['raison']);
  $description =  ($_POST['description']);
  $type_rdv = ($_POST['type_rdv']);
$pays=($_POST['pays']);
$ville = $_POST['ville'];
$not='Choisir une option';
// generer le code du ren-dez-vous en ligne
  $code='AR_'.rand(10000,99999);
  // Generation du code de rendez-vous presentiel
  $ext_name=explode(' ', $nom);
     //La fonction explode () divise une chaîne en un tableau.
    $extr=array_pop($ext_name);
    //La fonction array_pop () selectionne la derniere valeur du tableau.
   $name_extr=strtolower($extr);
  $pres_code=$name_extr.'-AR_'.rand(1000,9999);

   /* on test si les champ sont bien remplis */
    if(verifie($_POST['nom']) and verifie($_POST['tel'])  and verifie($_POST['email']) and verifie($_POST['raison'])and verifie($_POST['description'])and ($_POST['type_rdv']!=$not)and ($_POST['pays']!=$not) and verifie($_POST['ville']))
    {
      // ----------------------(((((((((((((())))))))))))))

      // ****differencier les rendez-vous en ligne des rendez vous presentiels
          $presentiel="presentiel (50.000)";
          if ($presentiel==$type_rdv) {
             //On créé la requête
                $sql = 'INSERT INTO client(nom,tel,email,raison,description,type_rdv,pres_code,pays,ville) VALUES ("'.$nom.'","'.$tel.'","'.$email.'","'.$raison.'","'.$description.'","'.$type_rdv.'","'.$pres_code.'","'.$pays.'","'.$ville.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

              if (!$result) {

                $answer= "Query Failed";

              }else {

   // insertion du 'users' et statut du ren de vous
              $fonction='users';
              $statut='N';
             
   $sq="UPDATE client SET fonction='{$fonction}',statut = '{$statut}' WHERE pres_code ='{$pres_code}'";
 $sql=$conn->query($sq);
                // affichage du code du client
                // 
                $search=$conn->query("SELECT * FROM client WHERE pres_code = '{$pres_code}'");
                // 
                      if ($search->rowCount() > 0) {

                      while($row=$search->fetch()) {
                       $_SESSION['pres_code']=$row["pres_code"];

              }


                       }
                //  
                $answer='ok';

 

              // 
 
              }
               // ---------------(((((((((((((())))))))))))))

          } else{
                //On créé la requête
                $sql = 'INSERT INTO client(nom,tel,email,raison,description,type_rdv,code_rdv,pays,ville) VALUES ("'.$nom.'","'.$tel.'","'.$email.'","'.$raison.'","'.$description.'","'.$type_rdv.'","'.$code.'","'.$pays.'","'.$ville.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

              if (!$result) {

                $answer= "Query Failed";

              }else {

   // insertion du 'users' et statut du ren de vous
              $fonction='users';
              $statut='N';
             
   $sq="UPDATE client SET fonction='{$fonction}',statut = '{$statut}' WHERE code_rdv ='{$code}'";
 $sql=$conn->query($sq);
                // affichage du code du client
                // 
                $search=$conn->query("SELECT * FROM client WHERE code_rdv = '{$code}'");
                // 
                      if ($search->rowCount() > 0) {

                      while($row=$search->fetch()) {
                       $_SESSION['code_rdv']=$row["code_rdv"];

              }


                       }
                //  
                $answer='ok';

 

              // 
 
              }

            }

      // ---------------(((((((((((((())))))))))))))

}
    else $answer= "Veuillez saisir tous les champs !"; 
}

$output=array('msg'=>$answer); 

echo json_encode($output);


?>