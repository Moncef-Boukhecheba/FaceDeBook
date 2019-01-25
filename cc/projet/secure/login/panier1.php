<!DOCTYPE HTML>

<html>
	<head>
		<title>BDE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="actions/delete.js"></script>

		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
		<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php require 'header.php'; ?>  

		<!-- Content -->
<section>
								
		<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
						<h2>Panier</h2>
						</header>
					</div>
				</section>

					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>photo</th>
									<th>Produit</th>
									<th>Description</th>
									<th>Quantité</th>
									<th>Price</th>
									<th>delete</th>
								</tr>


							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								
			 <?php

	                require 'actions/produit.php';
	                require 'actions/produitManager.php'; 
	                $db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
	                $manager = new ProduitManager($db);

	                $data =$manager->getcartList(1);
	                




	                foreach($data as $element)
	                {
	                    $element->affichagecart(); // affichera le panier.
	                }
                ?>

              
                  


									<td colspan="3"><h4>Total :</h4>  <h5 style="color:green">100$</h5></td>
									<td></td>
								</tr>
							</tfoot>
						</table>
						




						<div class="row uniform 50%">
							<div class="8u"></div>
							<div class="4u$ 12u$(xsmall)">
								<ul class="actions">

									<li><form   class ="Commander" action="actions/valider_commande.php" method="post" >	
										<button type="submit" class="speciale" >Commander</button>
										</form>
									</li>
									<li><button type="button" class="speciale" onclick="  tomarket()">continuer achat</button></li>	
								</ul>
							</div>
						</div>
					</div>
						

									

								</section>

						</div>
					</div>

<!-- Sidebar -->
<?php require 'sidebar.php';    ?>  

<!-- Scripts -->
<script>
function tomarket() {
  location.assign("market1.php");
}
</script>
		<script type="text/javascript">
function insertText () {
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