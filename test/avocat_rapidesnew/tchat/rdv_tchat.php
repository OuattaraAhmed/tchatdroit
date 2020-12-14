<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styl.css" />
    <title>Discutez avec un avocat & Prendre un Rendez_vous</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  action="" method="POST" style="padding: 20px" id="full_client" class="sign-in-form">
            <h2 class="title">Prendre un Rendez_vous</h2>
            <p class="social-text">Prenez un rendez_vous en fonction de votre disponibilité</p>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
             <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Name" />
            </div>
            <div class="input-field">
              <!-- <i class="fas fa-lock"></i> -->
              <input type="text" placeholder="entrez votre ville" />
            </div>
            <input type="submit" class="btn" value="Prendre un rdv" />
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
            <h2 class="title">Chat</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Tchater" />
            <p class="social-text">Disctuer avec un avocat</p>
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
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
