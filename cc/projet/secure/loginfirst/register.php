<!DOCTYPE html>
<html lang="fr">
  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="A2 CESI">

    <title>BDE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <a class="navbar-brand" href="#">
      <img src="images/logo-cesi.png" alt="">
    </a>
    <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
    <nav class="my-2 my-md-0 mr-md-3">

    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img src="images/BDE.png" id ="cesi" class="img-fluid" alt="Responsive image">
            <div class="container">
              <div class="row main">
                <div class="main-login main-center">

                  <form method="post" action="registerAction.php">

                    <div class="form-group">
                      <label for="Nom" class="cols-sm-2 mt-4 control-label">Votre Nom</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i  aria-hidden="true"></i></span>
                          <input type="text" class="rounded form-control" name="nom" id="name" placeholder="Nom"/ required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="prenom" class="cols-sm-2 mt-3 control-label">Votre prénom</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i aria-hidden="true"></i></span>
                          <input type="text" class="rounded form-control" name="Prenom" id="prenom" placeholder="Prenom"/ required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="cols-sm-2 mt-3 control-label">Votre email</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i aria-hidden="true"></i></span>
                          <input type="email" class="rounded form-control" name="email" id="email" placeholder="Email"/ required=""> 
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="cols-sm-2 mt-3 control-label">Votre mot de passe</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i aria-hidden="true"></i></span>
                          <input type="password" class="rounded form-control" name="password" id="password" placeholder="Mot de passe"/ required >
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="confirm" class="cols-sm-2 mt-3 control-label">Confirmez le mot de passe</label>
                      <div class="cols-sm-10">
                        <div class="input-group">
                          <span class="input-group-addon"><i aria-hidden="true"></i></span>
                          <input type="password" class="rounded form-control" name="confirm" id="confirm" placeholder="Confirmation"/ required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="Access" class="my-1 mr-2 mt-3 control-label" for="inlineFormCustomSelectPref">Statut</label>
                      <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choissisez votre statut</option>
                        <option value="1">Etudiant à l'EXIA</option>
                        <option value="2">Personnel du CESI</option>
                        <option value="3">Membre du BDE</option>
                      </select>

                      <div class="custom-control custom-checkbox mt-2 mb-5 mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlInline" name="access">
                        <label class="custom-control-label" for="customControlInline">Je confirme avoir lu et accepté les <a href="#">conditions légales</a></label>
                      </div>
                    </div>

                    <div class="form-group ">
                      <button class="btn btn-lg btn-outline-primary btn-block w-200 mb-3 text-uppercase" type="submit">Se connecter</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="bd-footer text-muted">

        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/"> BDE CESI EXIA</a>
        </div>

        <body>
          <!-- jQuery first, then Popper, then Bootstrap JS. -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
</html>