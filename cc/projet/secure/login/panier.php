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
						<h2>Panier</h2>
						</header>
					</div>
				</section>

					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>Delete</th>
									<th>Produit</th>
									<th>Description</th>
									<th>Quantité</th>
									<th>Price</th>
									<th>Photo</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<tr>
								<td><input type="button" value="Delete Row" onclick="SomeDeleteRowFunction(this)"></td>
											
											<td>Cocaine</td>
											<td>Colombie</td>
											<td>1</td>
											<td>1.00</td>
											<td><img src="images/man2.png" class="img-responsive voc_list_preview_img" alt="" title=""></a></td>
										</tr>
									
									<td></td>
								</tr>
								<tr>
								<td><input type="button" value="Delete Row" onclick="SomeDeleteRowFunction(this)"></td>
											
											<td>Cocaine</td>
											<td>Colombie</td>
											<td>1</td>
											<td>1.00</td>
											<td><img src="images/man2.png" class="img-responsive voc_list_preview_img" alt="" title=""></a></td>
										</tr>
									
									<td></td>
								</tr>
								<tr>
								
											<td><input type="button" value="Delete Row" onclick="SomeDeleteRowFunction(this)"></td>
											<td>Cocaine</td>
											<td>Colombie</td>
											<td>1</td>
											<td>1.00</td>
											<td><img src="images/man2.png" class="img-responsive voc_list_preview_img" alt="" title=""></a></td>
											
										</tr>
									<td colspan="3"><h4>Total :</h4>  <h5 style="color:green">100$</h5></td>
									<td></td>
								</tr>
							</tfoot>
						</table>
						

						<div class="row uniform 50%">
							<div class="8u"></div>
							<div class="4u$ 12u$(xsmall)">
								<ul class="actions">	
									<li><button type="button" class="speciale" onclick="window.location.href='#'">Commander</button></li>
									<li><button type="button" class="speciale" onclick="insertText()">Vider la corbeille</button></li>	
								</ul>
							</div>
						</div>
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
                require 'functions/sidebar.php';                    
                    ?>  

		<!-- Scripts -->
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