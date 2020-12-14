<?php

    include '../functions/main-functions.php';
    $user = $_SESSION['user'];
    $membre = $_SESSION['tchat'];

// l'expediteur (sender) = à la variable membre(l'utilisateur actif)
// le destinataire (receiver)à la variable user
    // si jamais l'expediteur dans la base de donnée c'est nous et que  le destinataire
    // j'aimerais bien afficher le message si cette condition est respecter ou bien alors si le destinataire m'a envoyer un message
    $req = $db->query("SELECT * FROM messages WHERE (sender='$membre' AND receiver='$user') OR (receiver='$membre' AND sender='$user')");//soit j'envoie soit il m'envoie
    // creation de ma variable $results = à mon tableau vide
    $results = array();

// afficher les données qui seront recuperer dans un tableau objet
    while($rows = $req->fetchObject()){
        // je recupère dans un tableau objet tous les données
        $results[] = $rows;
    }

//avec la boucle foreach je vais parcourir tous les resultats et tous les contenus de mon tableau
    foreach($results as $message){
        ?>
        <!-- div stylisant soit en bleu soit en gris -->
        <!-- la div qui porte soit un message membre soit un message user -->
            <div class="message <?php echo ($message->sender == $membre) ? 'message-membre' : 'message-user' ?>"><!-- (php echo ($message->sender == $membre) ? 'message-membre' : 'message-user' ) si jamais le $message de l'expediteur(donc sender) = à la variable $membre alors j'aimerais mettre comme classe message $membre et si se n'est pas le cas je vais afficher message-user  -->

                <!-- si jamais c'est moi qui envoie le message on met la classe message-membre dans le cas echeant on met la classe message-user -->

                <?= $message->message ?><!-- j'affiche le $message (message correspond au champ dans ma base de donnée) -->

            </div>
            <br/><br/>

        <?php
    }