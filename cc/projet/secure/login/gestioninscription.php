<!DOCTYPE HTML>

<html>
  <head>
    <title>BDE</title>
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

          <!-- Content -->
          <section>
            <section id="four" class="wrapper style1 special fade-up">
              <div class="container">
                <header class="major">
                  <h2>Gestion des inscriptions</h2>
                </header>
              </div>
            </section>
            <div class="table-wrapper">
              <table>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th class="text-center">Status</th>
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
                  <td>

                  </td>
                  <tr>

                  </tr>
                </tfoot>
              </table>

            </div>
            <script>
              function SomeDeleteRowFunction(o) {
                //no clue what to put here?
                var p=o.parentNode.parentNode;
                p.parentNode.removeChild(p);
              }
            </script>
          </section>

        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <?php
    require 'functions/sidebar.php';                 
    ?>  

    <!-- Scripts -->
    <script type="text/javascript">
      function insertText() {
        document.getElementsByTagName("td")[0];.innerHTML = "";

      }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>