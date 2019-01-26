<!DOCTYPE HTML>

<?php
require 'header.php';                    
?>  

<!-- Banner -->
<section id="banner">
  <div class="content">
    <header>
      <h1>Salut <?php echo $user->Prenom();?> !<br>
        'status'</h1>
      <p>Enjoy ta life  ici</p>
    </header>
    <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
    <ul class="actions">
      <li><a href="team.php" class="button big">En savoir plus sur notre Equipe</a></li>

    </ul>
  </div>
  <span class="image object">
    <img src="images/pic10.jpg" alt="" />
  </span>
</section>

<!-- Section -->
<section>
  <header class="major">
    <h2>Les meilleurs produit</h2>
  </header>
  <div class="features">
    <article>
      <span class="image"><img src="images/man2.png" alt="" ></span>
      <div class="content">
        <h3>Portitor ullamcorper</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
      </div>
    </article>
    <article>
      <span class="image"><img src="images/man2.png" alt=""> </span>
      <div class="content">
        <h3>Sapien veroeros</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
      </div>
    </article>
    <article>
      <span class="image"><img src="images/man2.png" alt=""> </span>
      <div class="content">
        <h3>Quam lorem ipsum</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
      </div>
    </article>
    <article>
      <span class="image"><img src="images/man2.png" alt=""> </span>
      <div class="content">
        <h3>Sed magna finibus</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
      </div>
    </article>
  </div>
</section>

<!-- Section -->
<section>
  <article>	
    <span class="private">
      <button type="button" onclick="myFunction()" >Ne plus attendre ecrire ton idee !</button>
    </span>


    <div id="myDIV">
      <h3>Ecrire une idee</h3>

      <form method="post" action="#">
        <div class="row gtr-uniform">
          <div class="col-6 col-12-xsmall">
            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
          </div>
          <div class="col-6 col-12-xsmall">
            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
          </div>
          <!-- Break -->
          <div class="col-12">
            <select name="demo-category" id="demo-category">
              <option value="">- Category -</option>
              <option value="1">Manufacturing</option>
              <option value="1">Shipping</option>
              <option value="1">Administration</option>
              <option value="1">Human Resources</option>
            </select>
          </div>
          <!-- Break -->
          <div class="col-4 col-12-small">
            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
            <label for="demo-priority-low">Low</label>
          </div>
          <div class="col-4 col-12-small">
            <input type="radio" id="demo-priority-normal" name="demo-priority">
            <label for="demo-priority-normal">Normal</label>
          </div>
          <div class="col-4 col-12-small">
            <input type="radio" id="demo-priority-high" name="demo-priority">
            <label for="demo-priority-high">High</label>
          </div>
          <!-- Break -->
          <div class="col-6 col-12-small">
            <input type="checkbox" id="demo-copy" name="demo-copy">
            <label for="demo-copy">Email me a copy</label>
          </div>
          <div class="col-6 col-12-small">
            <input type="checkbox" id="demo-human" name="demo-human" checked>
            <label for="demo-human">I am a human</label>
          </div>
          <!-- Break -->
          <div class="col-12">
            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
          </div>
          <!-- Break -->
          <div class="col-12">
            <ul class="actions">
              <li><input type="submit" value="Send Message" class="primary" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </article>
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