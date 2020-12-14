  <?php

    // creer cette fonction pour verifier l'existence des infos renseignés
    function user_exist($email,$code_rdv){
        global $db;
        $u = array(
            'email'=>$email,
            'code_rdv'=>$code_rdv
        );
        $sql = "SELECT * FROM client WHERE email=:email && code_rdv=:code_rdv";
        $req = $db->prepare($sql);
        // va executé le tableau $u
        $req->execute($u);
        // rowCount() une fonction or methode de pdo, on va compter le nbre de resultat 
        // que retourne la requete 
        $exist = $req->rowCount($sql);
        return $exist;
          
    }

     
     