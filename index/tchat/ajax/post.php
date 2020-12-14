<?php
//Demarrage de ma session 
    include '../functions/main-functions.php';
    //  
    $user = $_SESSION['user']; //($_SESSION['user'];) est donc la variable qu'on a creee dans tchat.php
     // on va l'enregistrer dans la variable $membre
    $membre = $_SESSION['tchat'];
    // 
    $message = htmlspecialchars(trim($_POST['message']));
 
 // creer un tableau qui va contenir tous ces variables  
    $i = array(
        'sender' => $membre, //  celui qui envoe le message
        'receiver' =>$user, // celui qui recoit
        'message'=>$message  // 
    );
//  
    $sql = "INSERT INTO messages(sender,receiver,message,date) VALUES(:sender,:receiver,:message,NOW())"; // l'instant present que j'aimerais bien enregistrer
    // 
    $req = $db->prepare($sql);// preparer la requete dans une variable
    // 
    $req->execute($i);  // executer le tableau stocké dans la variable $i 