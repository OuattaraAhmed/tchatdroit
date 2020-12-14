 <?php

 	// creer une fonction qui permet de recuperer les membres
    function get_membres(){
    	//definir ma variable $db comme etant global
        global $db;
        $req = $db->query("SELECT * FROM client");
        // creer un tableau qu'on va appeller $results 
        $results = array();
        // parcourir tous les resultats de la requte qui va retourner un tableau
        // j'aimerais definir cette variable $rows comme etant egale à ( $req->fetchObject() )
        while($rows = $req->fetchObject()){
        	// ensuite j'appelle ma variable (c'est un tableau) $results qui sera = à ma variable $rows
            $results[] = $rows;
        }
        // retourner cette variable ($results) afin de pouvoir l'utiliser
        return $results;
    }