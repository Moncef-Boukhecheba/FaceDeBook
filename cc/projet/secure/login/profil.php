<!DOCTYPE HTML>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php
require 'header.php';                    
?>  

<!-- Banner -->
<section id="banner">

  <div class="container">
    <div class="row">
      <div class="span2">
        <img width="250" height="250" src="images/<?php echo $user->Avatar();?>"  alt="Photo de profil" class="img-rounded">
      </div>
      <div class="span4">
        <blockquote>
          <p><?php echo $user->Prenom()." ".$user->Nom();?></p>
          <small><cite title="Source Title">Gotham, Algeria  <i class="icon-map-marker"></i></cite></small>
        </blockquote>
        <p>
          <i class="icon-envelope"></i> <?php echo $user->Email();?> <br>
          <i class="icon-globe"></i> Sex & Drugs <br>
          <i class="icon-gift"></i><strong style="color:darkgreen;"> 43</strong> Nombre de idee valider
        </p>
      </div>

      <div class="span2 ml-auto">
        <span class="private">
          <button type="button" onclick="myFunction()" >Modifier votre profil</button>
        </span>

      </div>
      <div class="container text-center my-3">
        <h3>Les Evenements ou vous avez participer !</h3>
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">

            <div class="carousel-item row no-gutters">
              <div class="col-3 float-left"><img class="img-fluid" src="images/pic04.jpg"></div>
              <div class="col-3 float-left"><img class="img-fluid" src="images/pic03.jpg"></div>
              <div class="col-3 float-left"><img class="img-fluid" src="images/pic02.jpg"></div>
              <div class="col-3 float-left"><img class="img-fluid" src="images/pic01.jpg"></div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>

    <h3>Veuillez editer vos informations</h3>
    <div class="well" id="myDIV">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
        <li><a href="#profile" data-toggle="tab">Password</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
          <form id="tab">
            <label class="text-center"><div class="container" style=" position: relative;
              text-align: center;
              color: white;
              width:80%;">
              <img src="images/man2.png" alt="Maison" style="width:10%;">

              <div class="centered" style="position: absolute;color:darkgrey;
                                           bottom: 8px;
                                           left: 50%;
                                           transform: translate(-50%, -50%);zidth:10%;">Modifier votre image</div>
              </div></label>
            <label>Nom</label>
            <input type="text" value="John" class="input-xlarge">
            <label>Prenom</label>
            <input type="text" value="Doe" class="input-xlarge">
            <label>E-mail</label>
            <input type="text" value="jdoe@tacompany.com" class="input-xlarge">
            <label>Status</label>
            <select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
              <option value="bla">CESI</option>
              <option value="bla">Membre BDE</option>
              <option value="bla">Etudiant</option>

            </select>
            <div>
              <button class="button" type="submit">Mettre a jours</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="profile">
          <form id="tab2">
            <label>New Password</label>
            <input type="password" class="input-xlarge">
            <div>
              <label>Confirm password</label>
              <input type="password" class="input-xlarge">
              <div>
                <button class="button">Update</button>
              </div>
              </form>
            </div>
        </div>
        </section>


    </div>
  </div>

  <!-- Sidebar -->
  <?php
  require 'sidebar.php';                    
  ?>  
  </div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>