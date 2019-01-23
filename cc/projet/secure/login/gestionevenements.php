<!DOCTYPE HTML>

<html>
  <head>
    <title>Tous les évenements</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">

          <!-- Header -->
          <?php
          require 'functions/header.php';                    
          ?>  
          <header class="main">

            <span class="button btn-default" onclick="window.open('postevent.php','popUpWindow','height=700,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">Je voudrais poster un evenement</span>

            <!-- Content -->				
            <a class="showSingle" target="1">			
              <span class="button btn-default " class="showSingle" target="1" >Poster un Produit</span></a>
            <a class="showSingle button" target="2"> <span> Gestion des evenement(en cours...) </span></a>
            <a class="showSingle button" target="3"> <span> Gestion des inscriptions</span></a> 
          </header>

          <section>
            <div class="row">
              <div class="col-4">
                <img class="mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3vxJxPkxMjSR7-0hPz41Ihg12UA4Qqcxeb7J37x5OGThEeVMC1w">
              </div>
            </div>

            <!-- Form Name -->
            <form class="form-horizontal">

              <fieldset>
                <!-- Text input-->
                <div class="targetDiv container" id="div2">

                  <section class="panel panel-default">
                    <div class="panel-heading"> 
                      <h3 class="panel-title">Panel d'ajout de produit</h3> 
                    </div> 

                    <div class="panel-body">
                      <form action="designer-finish.html" class="form-horizontal" role="form">

                        <!-- form-group // -->
                        <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Nom du produit</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Drogue Douce">
                          </div>
                        </div> 

                        <!-- form-group // -->
                        <div class="form-group">
                          <label for="about" class="col-sm-3 control-label">Description</label>
                          <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                          </div>
                        </div> 

                        <!-- form-group // -->
                        <div class="form-group">
                          <label for="qty" class="col-sm-3 control-label">Prix</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="qty" id="qty" placeholder="$$">
                          </div>
                        </div> 

                        <!-- form-group // -->
                        <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Choissisez une photo</label>
                          <div class="col-sm-3">
                            <label class="control-label small" for="file_img">Картинка (jpg/png):</label> <input type="file" name="file_img">
                          </div>
                        </div>

                        <!-- form-group // -->
                        <div class="form-group">
                          <label for="tech" class="col-sm-3 control-label">Type de Paiement</label>
                          <div class="col-sm-3">
                            <select class="form-control">
                              <option value="texnolog1">Amex</option>
                              <option value="texnolog2">Paypal</option>
                              <option value="texnolog3">Carte de credit</option>
                            </select>
                          </div>
                        </div> 

                        <hr>
                        <!-- form-group // -->
                        <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Confirmer</button>
                          </div>
                        </div> 

                      </form>

                    </div><!-- panel-body // -->
                  </section><!-- panel// -->
                </div> <!-- container// -->	

                <br>

                <article class="targetDiv">
                <h2  id="div1" id="begin">Gestion des Evenements(en cours)</h2>

                <p><span class="image left"><img src="images/pic01.jpg" alt=""></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                <div class="panel-footer row"><!-- panel-footer -->
                  <div class="col-xs-6 text-left">
                    <div class="previous">
                      <button  class="btn btn-default btn-lg">
                        <span class="fa fa-check fa-lg">Modifier</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-xs-6 text-right">   
                    <div class="next">
                      <button  class="btn btn-default btn-lg">
                        <span class="fa fa-trash fa-lg">Supprimer</span>
                      </button>
                    </div>
                  </div>
                </div>

                </article>
              </fieldset>
            </form>
          </section>

          <section  class="targetDiv wrapper style1 special fade-up"  id="div3">
            <div class="container" id="four">
              <header class="major">
                <h2>Gestion des inscriptions</h2>
              </header>
            </div>


            <div class="table-wrapper">
              <table>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Validation</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                  <tr>
                    <td><h4>Jean mouloud</h4></td>
                    <td><div class="form-check form-check-inline text-center">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Salariee du cesi</label>
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Etudiant</label>
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                      <label class="form-check-label" for="inlineRadio3">Membre de la BDE</label>
                      </div>
                    </td>

                    <td class="text-center">
                      <a href="#" class="btn btn-success a-btn-slide-text">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span><strong>Accepter</strong></span> 
                      </a>
                      <a href="#" class="btn btn-danger a-btn-slide-text">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        <span><strong>Supprimer</strong></span> 
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td>
                    </td>

                  </tr>
                </tfoot>
              </table>

            </div>


          </section>

          <script>
            function SomeDeleteRowFunction(o) {
              //no clue what to put here?
              var p=o.parentNode.parentNode;
              p.parentNode.removeChild(p);
            }
          </script>

        </div>
      </div>
      <!-- Sidebar -->
      <?php
      require 'functions/sidebar3.php';                    
      ?>  
    </div>


    <!-- Scripts -->
    <script>
      $(myDIV).hide();

      function myFunction() {
        document.getElementById("myDIV").style.visibility = "visible"
        var x = document.getElementById("myDIV");

        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }

    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">

      $('.showSingle').click(function() {
        $('.targetDiv').hide();
        $('#div' + $(this).attr('target')).show();
      });

    </script>

  </body>
</html>