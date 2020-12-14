<div class="topbar">
    <a class="app-name" href="index.php">Tchat</a>
    <span class="menu">
        <?php
        // si jamais la fonction isLogged = 1 dans ce cas
            if(isLogged() == 1){
                ?>
                <!-- si la variable $page = la page desiré alor on affiche active sinon j'affiche rien -->
                    <a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?>">Membres</a>
                    <a href="index.php?page=logout">Déconnexion</a>
                <?php
            }else{
                ?>
                <a href="../index.php">Faire une recherche</a>
                    <a href="index.php">Home</a>
                    <!-- <a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ?>">debuter un tchat</a> -->
                <?php
            }
        ?>
    </span>
</div>