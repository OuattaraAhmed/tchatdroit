<?php
    session_start();
    $dbhost = 'localhost';
    $dbname = 'mi_avocat';
    $dbuser = 'root';
    $dbpswd = '';
// cree yun tableau dans lequel je peux rajouter des requetes de base
    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }

    // menu fonction qui va permettre de voir si l'utilisateur est connecté ou non
    // isLogged() = (est connecté) en français
    function isLogged(){
        // si jamais il y'a une session de tchat (si la variable $_SESSION['tchat'] existe ) alors l'utilisateur est connecté 
        if(isset($_SESSION['tchat'])){
            //  defini une variable = 1(1 s'il est connecé, 0 dans le cas contraire)
            $logged = 1;
        }else{
            // sinon il n'est pas connecté
            $logged = 0;
        }
        return $logged; //retourné cette variable $logged
    }