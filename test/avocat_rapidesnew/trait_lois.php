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
	$preocupation = strtolower($_POST['preocupation']);
	$lois =  ($_POST['lois']);

   /* on test si les champ sont bien remplis */
    if(verifie($_POST['preocupation'])and verifie($_POST['lois']))
    {
   
                //On créé la requête
                $sql = 'INSERT INTO avocatrapide(preocupation,lois) VALUES ("'.$preocupation.'","'.$lois.'")';
                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli

            	if (!$result) {

            		$answer= "Query Failed";

            	}else {

   
                $answer='ok';
              }
           
              // 
}else $answer= "Veuillez saisir tous les champs !"; 

}

$output=array('msg'=>$answer); 

echo json_encode($output);


?>