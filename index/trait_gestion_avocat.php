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
if (isset($_POST ))
{ 

  $message= '';
	$nom = $_POST['nom'];
	$email =  ($_POST['email']);
	$specialite = strtolower($_POST['specialite']);
  $pays=($_POST['pays']);
  $ville=($_POST['ville']);
  $not='Choisir une option';
// generer le code de connexion de l'avocat
 
  $ncode='avocat';
  $code=$ncode.'@'.rand(1000,9999);

   /* on test si les champ sont bien remplis */
    if(verifie($_POST['nom'])and verifie($_POST['email']) and verifie($_POST['specialite'])and ($_POST['pays']!=$not)and verifie($_POST['ville']))
    {
      // 
$seq=$conn->query("SELECT * FROM client WHERE email ='{$email}'");
if ($seq->rowCount() == 0) {
      // 
                //On créé la requête
                $sql = 'INSERT INTO client(nom,email,code_rdv,specialite,pays,ville) VALUES ("'.$nom.'","'.$email.'","'.$code.'","'.$specialite.'","'.$pays.'","'.$ville.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

            	if (!$result) {

            		$answer= "Query Failed";

            	}else {

   // insertion du 'avocat'
              $fonction='avocat';
             
             
   $sq="UPDATE client SET fonction='{$fonction}' WHERE code_rdv ='{$code}'";
 $sql=$conn->query($sq);
                // affichage du code du client
                 
                $answer='ok';
              }
              // 
            }else $answer= "Ce avocat existe deja"; 
              // 
}else $answer= "Veuillez saisir tous les champs !"; 

}

$output=array('msg'=>$answer); 

echo json_encode($output);


?>