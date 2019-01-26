<!DOCTYPE HTML>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
require 'header.php';                    
?>  

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
            </div>				</td>

          <td class="text-center">
            <a href="#" class="btn btn-success a-btn-slide-text">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              <span><strong>Accepter</strong></span></a> 

            <a href="#" class="btn btn-danger a-btn-slide-text">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              <span><strong>Supprimer</strong></span></a>   	
          </td>




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



  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Lists -->











      <!-- Box -->



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