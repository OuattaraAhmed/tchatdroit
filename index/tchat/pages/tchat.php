 <?php

    // pour verifier si l'utilisateur qu'on a saisi dans l'url existe bien

 // si jamais il n'ya pas d'utilisateur defini ici(saisi) ou la personne encour n'est pas connecté n'est pas connecté ou l'utilisateur n'existe pas
    if(!isset($_GET['user']) || isLogged() == 0 || user_exist() != 1){
        // redirection vers la page home
        header("Location:index.php?page=home");
    }

    // definir une variable session = à la variable saisi dans l'url
    // on l'a creer tous simplement quand on fait de l'ajax on a pas accès au variable de l'url
    $_SESSION['user'] = $_GET['user'];

    //pour afficher le nom de notre interlocuteur
    foreach(get_user() as $user){
        ?>
        <style type="text/css">
            .image_upload
            {
                position: absolute;
                top:3px;
                right:3px;
            }
            .image_upload > form > input
            {
                display: none;
            }

            .image_upload img
            {
                width: 24px;
                cursor: pointer;
            }

        </style>
            <h2 class="header"><?= $user->nom; ?></h2>

            <div class="messages-box"></div> <!-- message que  -->

            <div class="bottom">
                <!--  -->
                    <div class="image_upload">
                <form id="uploadImage" method="post" action="upload.php">
                    <label for="uploadFile"><img src="upload.png" /></label>
                    <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
                </form>
            </div>
                <!--  -->
                <div class="field field-area">
                    <label for="message" class="field-label">Votre message</label>
                    <!-- tchat.js -->
                    <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
                </div>

                <!-- boutton d'envoie de message -->
                <button type="submit" id="send" class="send">
                    <span class="i-send"></span>
                </button>

            </div>
            <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <?php
    }



