
<!-- signin.php -->

  <?php
  // pour empecher l'utilisateur de saisir directement dans l'onglet la page de connection pour y acceder
  // si jamais l'utilisateur est connecté et tente d'aller vers la page de connexion on doit le rediriger sur la page membre
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>


<?php
// ****nouvelle fonction crée
 function synthese($id_ar, $email, $code_rdv){
        global $db;
        $r = array(
            'id_ar'=>$id_ar,
            'email'=>$email,
            'code_rdv'=>$code_rdv
        );
        $sql = 'SELECT * FROM client WHERE id_ar = :id_ar && email = :email && code_rdv = :code_rdv';
        $req = $db->prepare($sql);
        $req->execute($r);
        $free = $req->rowCount($sql);

        return $free;
    }


// ****

    if(isset($_POST['submit'])){
        // definir deux variables
        $email = htmlspecialchars(trim($_POST['email']));
        $code_rdv = (htmlspecialchars(trim($_POST['code_rdv'])));

        // si cette fonction crée return 1 connecté l'utilisateur
        if(user_exist($email,$code_rdv) == 1){
            // *****
    $sql = "SELECT id_ar FROM client WHERE email='{$email}' AND code_rdv='{$code_rdv}'";
    $req = $db->query($sql);
        $e=$req->fetch();
        $id_ar = $e['id_ar'];

        if (synthese($id_ar, $email, $code_rdv) == 1) {

            $_SESSION['tchat'] = $id_ar;
            $_SESSION['email'] = $email;
            $_SESSION['code_rdv'] = $code_rdv;

            header("Location:index.php?page=membres");
            
        }else{
            $error_user_not_found = "nouvel ajout";
        }

    // ******

            
        }else{
            // crée un message d'erreur
            // on va l'enregistrer dans la variable $error_user_not_found
            $error_user_not_found = "L'adresse email ou Code du rendez-vous est incorrect";
        }


    }
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
  position: fixed;
  bottom: 0;
  left: 0;
  height: 100%;
  z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.login-content{
  display: flex;
  justify-content: flex-start;
  align-items: center;
  text-align: center;
}

.img img{
  width: 500px;
}

form{
  width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
  margin: 15px 0;
  color: #333;
  text-transform: uppercase;
  font-size: 2.9rem;
}

.login-content .input-div{
  position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
  margin-top: 0;
}

.i{
  color: #d9d9d9;
  display: flex;
  justify-content: center;
  align-items: center;
}

.i i{
  transition: .3s;
}

.input-div > div{
    position: relative;
  height: 45px;
}

.input-div > div > h5{
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  color: #999;
  font-size: 18px;
  transition: .3s;
}

.input-div:before, .input-div:after{
  content: '';
  position: absolute;
  bottom: -2px;
  width: 0%;
  height: 2px;
  background-color: #38d39f;
  transition: .4s;
}

.input-div:before{
  right: 50%;
}

.input-div:after{
  left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
  width: 50%;
}

.input-div.focus > div > h5{
  top: -5px;
  font-size: 15px;
}

.input-div.focus > .i > i{
  color: #38d39f;
}

.input-div > div > input{
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  background: none;
  padding: 0.5rem 0.7rem;
  font-size: 1.2rem;
  color: #555;
  font-family: 'poppins', sans-serif;
}

.input-div.pass{
  margin-bottom: 4px;
}

a{
  display: block;
  text-align: right;
  text-decoration: none;
  color: #999;
  font-size: 0.9rem;
  transition: .3s;
}

a:hover{
  color: #38d39f;
}

.btn{
  display: block;
  width: 100%;
  height: 50px;
  border-radius: 25px;
  outline: none;
  border: none;
  background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
  background-size: 200%;
  font-size: 1.2rem;
  color: #fff;
  font-family: 'Poppins', sans-serif;
  text-transform: uppercase;
  margin: 1rem 0;
  cursor: pointer;
  transition: .5s;
}
.btn:hover{
  background-position: right;
}


@media screen and (max-width: 1050px){
  .container{
    grid-gap: 5rem;
  }
}

@media screen and (max-width: 1000px){
  form{
    width: 290px;
  }

  .login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
  }

  .img img{
    width: 400px;
  }
}

@media screen and (max-width: 900px){
  .container{
    grid-template-columns: 1fr;
  }

  .img{
    display: none;
  }

  .wave{
    display: none;
  }

  .login-content{
    justify-content: center;
  }
}
  </style>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.svg">
        </div>
        <div class="login-content">
            <form method="post" id="logForm">
                <h2 class="title">Tchater</h2>
                <img src="img/avatar.svg">
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="field">
                         <input class="input" type="email" name="email" id="email" placeholder="email" />
                   </div>
                </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="field">
                        <input class="input" type="text" name="code_rdv" id="password" placeholder="code du rdv" />
                   </div>
                </div>
                <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
                <button type="submit" name="submit"  class="btn">Se connecter</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
