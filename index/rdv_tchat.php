
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!--  <meta http-equiv="refresh" content="durée;URL=adresse-de-destination"> redirection de sa page web sans aucune .. -->
   <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script> 
    
    <link rel="stylesheet" href="styl.css" />
    <title>Discutez avec un avocat & Prendre un Rendez_vous</title>
    <style type="text/css">
      


.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 25px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
}

    </style>
  </head>
  <body>
    <!-- ****************************************** -->



    <!-- ****************************************** -->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" id="full_client" class="sign-in-form">
        <div id="message" ></div>
    <div class="form-group">
        
        <input type="text" name="nom" id="full_nom" class="input-field" placeholder="nom & prenoms">
    </div>
    <div class="form-group">
             
        <input type="tel" name="tel" id="full_tel" class="input-field" placeholder="numero">
    </div>
    <div class="form-group">
             
        <input type="email" name="email" id="full_email" class="input-field" placeholder="email">
    </div>
    <div class="form-group">
             
        <input type="text" name="ville" id="full_ville" class="input-field" placeholder="ville">
    </div>
    <div class="form-group">
            
         <input type="text" name="raison" id="full_raison" class="input-field" placeholder="les raisons">
    </div>
    <div class="form-group">
        <SELECT name="pays" size="1" class="input-field">
<OPTION>Choisir une option          
<OPTION>Ivory Coast
<OPTION>Ghana
    <OPTION>togo
        <OPTION>Benin
            <OPTION>afrique du sud
</SELECT>
    </div>
    <div class="form-group">
        <SELECT name="type_rdv" size="1" class="input-field">
            <OPTION>Choisir une option
<OPTION>en ligne (10.000Fr)
<OPTION>presentiel (50.000)
</SELECT>
    </div>
    <div class="form-group">
        <textarea name="description" id="full_description" class="input-field" style="height:100%;width:90%"></textarea>
    </div>
    <div class="float-right">
      <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> Prendre un RDV </button>
      </div>
      <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
      </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Tchater avec votre avocat</h2>
            <p class="social-text">pour échanger avec l'avocat en question il faut :</p>
           
           <ol>
             <li>verifier si vous avez  rdv le jour actuel</li>
             <li>si oui il vous faut insérer votre mail et code reçu lors de la prise de rdv</li>
           </ol>
           <button class="btn btn-primary" id="sign-in-btn">
              <a href="tchat/index.php?page=signin" style="text-decoration: none;color: white;">Voulez-vous vraiment tchater</a>
            </button>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
           
            <h3>Discutez avec un avocat</h3>
            <p>
              Si vous avez des préocupations , nous vous écoutons
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Chat
            </button>
            <button class="btn transparent" id="sign-in-btn">
              <a href="indexs.php" style="text-decoration: none;color: white;">Retour</a>
            </button>
          </div>
          <img src="img/lawyer.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3> Choisissez votre date de rendez_vous</h3>
            <p>
             Nous vous programmons en fonction de l'horaire de nos avocats.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Prendre un Rendez_vous
            </button>
            <button class="btn transparent" id="sign-in-btn">
              <a href="indexs.php" style="text-decoration: none;color: white;">Retour</a>
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

<?php include("inc/footer.php") ?>
<script type="text/javascript" src="js/auth.js"></script>
  </body>
</html>
