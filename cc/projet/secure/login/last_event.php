<!DOCTYPE HTML>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php
				require 'header.php';  
				require 'actions/evenement/event.php';
				require 'actions/evenement/eventManager.php';
			             
	?>  

							<!-- Banner -->
						
<header class="main">
<h1>Evenements Postulé</h1>
  <a class="button btn-default" href="postevent.php" >Je voudrais poster un autre evenements</a>
  
	</header>


    						
                               
    
								</section>
<section>
<div id="one"></div>
													
<?php
				
			
				$db = new PDO('mysql:host=localhost;dbname=bde_alger', 'root', '');
				$manager = new EventManager($db);
				$my=$manager->affiche_last(1);   
				$my->affiche_event_admin();             
	?>  
													

        </section>
<section>
  												
</section>
 

<section>
   <div class="box text-center">
														<p>Seulement les membres de la BDE peuvent poster des articles</p>
													</div>
    </section>
<section>
   
</section>
						</div>
					</div>

				<!-- Sidebar -->
					 
			</div>

		<!-- Scripts -->



			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>