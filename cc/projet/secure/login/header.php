<html lang="fr">
  <head>
    <title>BDE CESI EXIA Alger</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css"  />
    <link href="https://fonts.googleapis.com/css?family=Roboto:600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>

  <?php
  session_start();
  require("../user.php");
  if (isset($_SESSION['user'])){
    $user = unserialize($_SESSION['user']);
  }
  else{
    header("location:../loginfirst/login.php");
  }
  ?>

  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
      <div id="main">
        <div class="inner">

          <!-- Header -->
          <header id="header">
            <section id="search" class="alt">
              <form method="post" action="#">
                <input type="text" name="query" id="query" placeholder="Search" />
              </form>
            </section>

            <ul class="icons">
              <li><button onclick="window.location.href='panier.php'" id="blue"><img style="position:relative;"src="images/cart.png" alt="Panier">Panier</button></li>

              <li>
                <div class="dropdown">
                  <a href="#" class="" data-count="1"><img class="inset"src="images/<?php echo $user->Avatar();?>" alt="photo de profil" id="profil"></a>

                  <div class="dropdown-content">
                    <a  class="row p-0 m-0 button" href="panel.php">Notifications<span class="fas fa-2x fa-bell"></span></a>
                    <a  class="row p-0 m-0 button" href="profil.php">Mon Profil<span class="fas fa-2x fa-user"></span></a>
                    <a  class="row p-0 m-0 button" href="logout.php">Deconnecter<span class="fas fa-2x fa-sign-out-alt"></span></a>
                  </div>
                </div>
              </li>
            </ul>

          </header>

