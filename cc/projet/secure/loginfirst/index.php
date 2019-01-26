<!DOCTYPE html>
<html lang="fr">

  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bienvenue sur le site du BDE du CESI Alger, en tant qu'étudiant vous pourrez voir, 
                                      proposer, et participer à des évenements au sein du centre">
    <meta name="author" content="A2 CESI">

    <title>Bienvenue sur le site du BDE alger</title>
    
    <link href="styles_all.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
  </head>

  <body>
    
    <?php include "header.php" ?>
    
    <main class="bd-masthead" id="content" role="main">
      <div class="container">
        <div class="row align-items-center">
          <div class=" col-md-6 order-md-2">
            <img src="images/cesi.png" class="mb-5 img-fluid mx-2" alt="Responsive image">
          </div>
          <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">

            <img src="images/BDE.png" id ="cesi" class="img-fluid" alt="Responsive image">
            <h4 class=" text-warning mt-5 text-center">
              Bienvenue au site du BDE du CESI EXIA ALGER.
            </h4>
            <p class="lead my-4 text-justify">
              Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique
            </p>
            <div class="row">
              <div class="col-md ">
                <a href="login.php" class="btn btn-lg btn-outline-primary w-100 mb-3">Se connecter</a>
              </div>
              <div class="col-md ">
                <a href="register.php" class="btn btn-lg btn-outline-warning w-100 mb-3">S'inscrire</a>
              </div>
            </div>
            <p class="text-muted text-center mb-0">
              Seuls les membres du CESI Alger peuvent s'inscrire.
            </p>
          </div>
        </div>

        <footer class="bd-footer text-muted">

              <?php include "footer.php" ?>

        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </div>
    </main>
  </body>
</html>
