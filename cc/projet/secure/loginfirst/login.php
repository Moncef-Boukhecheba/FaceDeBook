<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Connectez-vous à votre compte CESI BDE Alger">
    <meta name="author" content="A2 CESI">

    <title>Connectez-vous à votre compte</title>
    
    <link href="styles_all.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>

  <?php include "header.php" ?>

  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-9 col-md-7 col-lg-5 ">
          <div class="card card-signin my-5">
            <div class="card-body p-0">
              <img src="images/BDE.png" id="cesi" class="img-fluid" alt="Responsive image">
              <h5 class="card-title text-center mt-5">Se connecter</h5>
              <form class="form-signin" method="post" action="./actions/loginAction.php">
                <?php 
                if( isset($_SESSION['failed']) && $_SESSION['failed']){
                  echo "<div class ='text-center text-danger'><p>L'e-mail ou le mot de passe est incorrect</p></div>"; 
                  session_destroy();
                  } 
                ?>
                <div class="form-label-group" style="overflow: hidden;" >
                  <input type="text" id="inputuser" class="form-control" placeholder="E-Mail" name="email"
                         required autofocus>
                  <label for="inputuser">Ecrivez votre e-mail</label>
                </div>

                <div style="overflow: hidden;" class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                         name="Password" required>
                  <label for="inputPassword">Votre mot de passe</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Se rappeler de moi</label>
                </div>
                <button class="btn btn-lg btn-outline-primary btn-block w-200 mb-3 mt-5 text-uppercase" type="submit">Connexion</button>

                <h5 class="mb-0 text-center"><a href="register.php">Je ne suis pas encore membre</a></h5>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bd-footer text-muted">

      <?php include "footer.php" ?>


    </footer>
    
    <!-- jQuery first, then Popper, then Bootstrap JS. -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
              crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
              crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
              crossorigin="anonymous"></script>
  </body>

</html>