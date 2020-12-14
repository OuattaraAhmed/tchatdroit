<?php
    include 'functions/main-functions.php';
// la fonction scandir qui va permettre de scanner (je dossier page) un dossier(i-e=recupérer tout les contenus du dossier page pour par la suite l'afficher) tous cela sera stocké dans la variable $page
    $pages = scandir('pages/'); //la variable $page est un tableau
//  verifier qu'il y'a bien la variable de l'url de la $_GET['page'] et la variable n'est pas vide
//  si j'ai une variable page qui existe alors je vais pouvoir travailler avec cette page 

// moi: verifier si la page démandé existe et n'est pas vide et verifier si dans le tableau $pages on a bien notre variable $_GET['page'] (ajoute un point de concatenation et un . php qui est l'extension de mon fichier )
    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
        // si la page existe elle va s'afficher 
        //defini une variable page qui va contenir le contenu de la variable $_GET['page']
        $page = $_GET['page'];
    }else{
        //sinon redirection à la page home
        //si jamais on fait une erreur on va forcer la variable à contenir home
        $page = 'home';
    }

    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Application web de tchat</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            include 'body/topbar.php';
        ?>
        <div class="container">
            <?php
            //va include la page  qui se trouve dans dossier pages concatenation (.) pour contenir la variable $page
                include 'pages/'.$page.'.php';
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                <!-- elle doit contenir un exerce relative à la page actuelle -->
                <!-- mtn je peux include tous les fichiers relatifs à la page actuelle à partir de mes dossiers function et js -->
                    <script src="js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>

    </body>
</html>