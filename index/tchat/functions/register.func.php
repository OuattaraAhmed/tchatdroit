 <?php

    // fonction email_taken on lui passe en paramettre l'email que l'utilisateur à saisie
    function email_taken($email){
        // etant donnée que je n'est definir la variable $db, je vais tout simplement la  mettre en globale
        global $db;
        // creer un tableau qui sera stocké dans la variable $e et va contenir l'adresse
        // email saisie par l'utilisateur
        $e = array('email' => $email); //('email') == (:email)
        $sql = 'SELECT * FROM users WHERE email = :email';
        $req = $db->prepare($sql);
        // va executé le tableau $e
        $req->execute($e);
        // rowCount() une fonction or methode de pdo, on va compter le nbre de resultat 
        // que retourne la requete 
        $free = $req->rowCount($sql);

        return $free;
    }//si jamais l'email=0 x peut s'inscrit sinon 1 il ne peut pas 



    function register($name, $email, $password){
        global $db;
        $r = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        );
        $sql = "INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }