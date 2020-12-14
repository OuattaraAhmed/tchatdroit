$(document).ready(function() {

    recupMessage();

    $('.field-input').focus(function () {
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function () {
        $parent = $(this).parent();
        if ($(this).val() == '') {
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function () {
        if ($(this).val() != '') {
            $(this).parent().addClass('has-label');
        }
    });

// **********************************************************************
// **********************************************************************

// voir si l'utilisateur à cliqué sur le bouton send
// si jamais on presse le bouton (si on lui clique dessus) on va demarrer 
// une fonction
    $('#send').click(function(){
// si on clique sur ce bouton nous aimerions que la variable message 
// soit defini (var message va etre = au contenu du textarea qui) s'appelle
// message(or pour l'id message) on aimerais recuperer la valeur de ce 
// textarea
         
        var message = $('#message').val();

// mtn on va voir s'il est vide ou pas
        // si jamais se (le message) n'est pas vide
        if(message != ''){
// je vais demarrer une requete ajax.(dans ma requete ajax) post pour 
//poster dedans je vais créér ma page, ensuite je defini ma variable qui 
//sera utilisé en tant que $_post. par la suite je demare une
  // fonction qui s'"xecutera une fois la requete terminé  
// une fois qu'on a fait notre requete ajax qui se trouve dans 
// le dossier ajax dans le fichier post.php et bien ..
            $.post('ajax/post.php',{message:message},function(){
// ici j'ai ma fonction qui s'execute une fois fois que ma requete ajax 
// à eu lieu quand l'utilisateur envoie un message il le voir affichers
                recupMessage();
                // et bien j'aimerais que ce textarea soit vide
                $('#message').val('');
            });
        }
    });


// recuperer le message envoyer 
// j'ai creer cette fonction tout simplement parce que je pourais dire 
// à javascript de l'executer toutes les (deux) secondes
    function recupMessage(){
        //ca sera de nouveau une new requete de $.post
        $.post('ajax/recup.php',function(data){
            // affficher les messages (données). je vais lui renvoyer 
            // les données qui seront renvoyé par la requete ajax
            $('.messages-box').html(data);

        });
    }

// tu l'execute toute les secondes pour verifier et qu'on 
// est pas à actualiser une nouvelle fois la page
    setInterval(recupMessage,1000); //on met la fonction sans 
    // les "()" et je precise en 1000 secondes tous les combien de
     // temps que se soit actualisé

});