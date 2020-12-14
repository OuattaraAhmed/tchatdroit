  <?php
  // pour empecher l'utilisateur de saisir directement dans l'onglet la page d'inscription pour y acceder
  // si jamais l'utilisateur est connecté et tente d'aller vers la page d'inscription on doit le rediriger sur la page membre
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header header-form">S'inscrire</h2>

<?php
    if(isset($_POST['submit'])){
        //  (htmlspecialchars) pour enlever les accens 
        // (trim)pour enlever les espaces de début et de fin
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        // si la fonction est egale à 1
        if(email_taken($email) == 1){
            // si tel est le cas je vais definir une variable $erreur
            $error_email = "L'adresse email est déjà utilisée...";
        }else{
            // si jamais l'utilisateur à bien saisi une adresse emal qui n'est pas encore utilsé alors on l'inscrit sur le site grace à la fonction register
            register($name, $email, $password);
            // et je vais definir une session 
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }
    }

?>

<form method="post" id="regForm">

    <div class="field">
        <label class="field-label" for="name">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
    <!-- si jamais la variable (error_email) existe de l'aficher dans le cas contraire il n'affiche rien -->
    <p class="error"><?php echo (isset($error_email)) ? $error_email : ''; ?></p>
    <button type="submit" name="submit">S'inscrire</button>


</form>