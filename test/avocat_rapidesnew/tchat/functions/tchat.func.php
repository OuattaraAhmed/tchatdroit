 <?php
 // 
    function user_exist(){
        //  la fonction user_exist() va d'abord definir la variable $db comme etant global
        global $db;
        // ensuite crée la variable $e qui contient un tableau qui contient les données à rechercher. session= la session encour
        $e = array('user' => $_GET['user'], 'session'=>$_SESSION['tchat']);
        // j'aimeraais bien recupérer dans la table client l'utilisateur qui a pour adresse email l'adresse email saisie dans l'url. et j'aimerais que se ne soit pas l'utilisateur qui est connecté pour le moment avec la variable $_SESSION
        // je ne veux pas que se soit la session active
        $sql = "SELECT * FROM client WHERE id_ar =:user AND id_ar != :session";
        $req = $db->prepare($sql);
        $req->execute($e);
        $exist = $req->rowCount($sql);
        return $exist;
    }

    // je veux afficher le nom de la personne avec qui je veux echanger et un formulaire en dessous et bien evidamment les messages en dessous

    
    // creer une new fonction qui va me permettre de recupérer toutes les informations à propos de cette utilisateur
    function get_user(){
        global $db;
        // la variable session
        $req = $db->query("SELECT * FROM client WHERE id_ar = '{$_SESSION['user']}'");
        // definir un tableau vide
        $user = array();
        // parcourir les resultats de la recherche qu'on va enregistrer ça dans une variable $row
        while($row = $req->fetchObject()){
            // le tableau user tu le remplir avec ces infos contenu dans row
            $user[] = $row;
        }
        return $user;

    }