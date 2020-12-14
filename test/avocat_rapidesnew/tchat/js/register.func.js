$(document).ready(function(){
    $('.field-input').focus(function(){
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function(){
        $parent = $(this).parent();
        if($(this).val() == ''){
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function(){
        if($(this).val() != ''){
            $(this).parent().addClass('has-label');
        }
    });

//si on soumet le formulaire alors on demare une fonction
    $('#regForm').submit(function(){
        //cette fonction va definir trois variable: on les appelles 
        // grace à leur id= #name et leur contenu val 
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();

        var result = true;
// si jamais la variable name= une chaine de caractère vide
        if(name == ""){
            // on appelle l'id et on aimerais l'ajouter 
            // au parent(c'est la div qui porte la class field) 
            // la class (is-focused pour avoir la barre rouge)
            $('#name').parent().addClass('is-focused error');
            result = false; //vu qu'il y'a une erreur tu passe à false
        }

        if(email == ""){
            $('#email').parent().addClass('is-focused error');
            result = false;
        }

        if(password == ""){
            $('#password').parent().addClass('is-focused error');
            result = false;
        }

        return result;

    });
    // si jamais il appuis sur une touche on demarre une
    // fonction qui va contenir une condition
    $('#name').keyup(function(){
        // si jamais le selecteur jquerie name.val() est egale à une chaine de caractère vide
        if($('#name').val() == ""){
            // alors je lui remet l'erreur d'avant (or je lui raffiche l'erreur)
            $('#name').parent().addClass('is-focused error');
        }else{
            // par contre si se n'est pas le cas alors je vais tout simplement enlever la classe error
            $('#name').parent().removeClass('error');
        }
    });

    $('#email').keyup(function(){
        if($('#email').val() == ""){
            $('#email').parent().addClass('is-focused error');
        }else{
            $('#email').parent().removeClass('error');
        }
    });

    $('#password').keyup(function(){
        if($('#password').val() == ""){
            $('#password').parent().addClass('is-focused error');
        }else{
            $('#password').parent().removeClass('error');
        }
    });

});