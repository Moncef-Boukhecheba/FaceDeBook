<!DOCTYPE HTML>

<html>
	<head>
		<title>BDE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="actions/idee/addidee.js"></script>
		<style>
		.zeb{ 
			background-color: black;

		}
		</style>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
		<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php
               // require 'functions/header.php';                    
                    ?>  



		<!-- Content -->
								<section>
						

								<section id="boiteaidee">
									<header class="major">
										<h2>Boite a idee</h2>
									</header>
									
									<h2 class="Lead">Les derniers idees</h2>
									<div id="lo" class="posts"> 
									
									<?php //var_dump(date("Y-m-d"));
									require 'actions/idee/affichage.php';
									 ?>
									</div> 
									
									
									<article>	
										<span class="private">
      								<button type="button" onclick="myFunction()" >Ne plus attendre ecrire ton idee !</button>
    									</span>

														
													<div id="myDIV">
													<h3>Ecrire une idee</h3>
													<form class="addidee" action="actions/idee/execute.php" method="post" >
													
														<div class="row gtr-uniform">
															
															<!-- Break -->
															
															<!-- Break -->
															<div class="col-12">
																<textarea id="message_idee" name="message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li>
																	
																	<input class="hid" type="hidden" name="action" value="add" /> 
																 	<button id="addbtn"  type="submit" class="button" >envoyer</button>
																 	</form>
																 	</li>

																	<li><input type="reset" value="Reset" /></li>
																</ul>
															</div>
														</div>
													
													</div>
													</article>
								</section>




								

						</div>
					</div>

				<!-- Sidebar -->
						<?php
                require 'sidebar.php';                    
                    ?>  

		<!-- Scripts -->
			<script>
	document.getElementById("myDIV").style.visibility = "hidden"
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

	</body>
</html>