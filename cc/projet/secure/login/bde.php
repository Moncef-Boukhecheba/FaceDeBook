<!DOCTYPE HTML>

<?php
require 'header.php';                    
?>  

<!-- Banner -->
<section id="boiteaidee">
  <header class="major">
    <h2>Boite a idee</h2>
  </header>
  <h3 class="Lead">Les derniers idees</h3>
  <article>	
    <span class="private">
      <button type="button" onclick="myFunction()" style="margin-bottom:1em;">Ecrire une idee !</button>
    </span>


    <div id="myDIV" style="display: none;">
      <h3>Ecrire une idee</h3>
      <form class="addidee" action="http://localhost/projet/projet/secure/login/actions/idee/execute.php" method="post">

        <div class="row gtr-uniform">

          <!-- Break -->

          <!-- Break -->
          <div class="col-12">
            <textarea id="message_idee" name="message" placeholder="Enter your message" rows="6"></textarea>
          </div>
          <!-- Break -->
          <div class="col-12">
            <ul class="actions">
              <li>

                <input class="hid" type="hidden" name="action" value="add"> 
                <button id="addbtn" type="submit" class="button">envoyer</button>
              </li>


              <li><input type="reset" value="Reset"></li>
            </ul>
          </div>
        </div></form>

    </div>
  </article>
  <div class="posts">

    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;"><a href="#"class="bite"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none;display:inline-block;"><a href="#"class="button"><img src="images/excla.png" style="margin-top:3px;"class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>
    <article>

      <div class="panel">
        <div class="panel-heading">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-2">
                <form class="voter" action="http://localhost/projet/projet/secure/login/boiteaidee.php#" method="post">

                  <input class="id_idee" type="hidden" name="id_idee" value="1">

                </form>

              </div>
              <div class="col-sm-9">
                <h4 class="pull-right">
                  <small><em>2019-01-22</em></small>
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="box panel-body">
          <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</blockquote>

          <ul> 

            <li class="pull-left text-center" style="border-style:none; display:block"><a href="#"class="button"><img src="images/excla.png" style=""class="img-responsive" alt=""/> </a></li>

            <li class="pull-right" style="display:inline-block;"><a href="#" class="button">
              <img style="margin-top:3px;" src="images/voting.png" class="img-responsive" alt=""/> </a></li>

          </ul>
        </div>       
      </div>

    </article>						




  </div>

  <span class="private">	
    <button type="button"  onclick="myFunction();window.location.href='#myDIV';" style="margin-bottom:1em;">Ne plus attendre ecrire une ideee !</button>
  </span>

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