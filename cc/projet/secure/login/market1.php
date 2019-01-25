<!DOCTYPE HTML>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php
                require 'header.php';                    
                    ?>  

							

        
	<section >
	<header class="main" >
	</header>									
									
	
										
	
					
					
	<div id="body" style=>
	<div class="container">
		
		<div class="row">
			<div class="row">
				
				
			</div>
			<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							
							   
	<?php
	
	require 'actions/produit.php';
	require 'actions/produitManager.php'; 
	$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
	$manager = new ProduitManager($db);
	$data =$manager->getList();
	
	
	
	
	foreach($data as $element)
	{
		$element->affichage(); // affichera $prenoms[0], $prenoms[1] etc.
	}
	  ?>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
						</div>
    </section>




	</div>
	</div>

				<!-- Sidebar -->
<?php require 'sidebar.php';  ?>  
</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>