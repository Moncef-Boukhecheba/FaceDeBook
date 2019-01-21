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
									<header class="main">
										<h1>Evenements Future</h1>
                                        <span class="button btn-default" onclick="window.open('postevent.php','popUpWindow','height=700,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">Je voudrais poster un evenements</span>
									</header>


													<span class="image fit" "><img onclick="jump('one');changeIt(this)" src="images/pic11.jpg" alt="" /></span>

													<div class="box alt">
														<div class="row gtr-50 gtr-uniform">
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic01.jpg" alt="" /></span></div>
															
															
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic02.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic03.jpg" alt="" /></span></div>
		<!-- Break -->
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic03.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic01.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic02.jpg" alt="" /></span></div>
		<!-- Break -->
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic02.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic03.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img onclick="jump('one');changeIt(this)" src="images/pic01.jpg" alt="" /></span></div>
							




			



																					
														</div>
														
													</div>
	<ul class="pagination text-center">
														<li><span class="button disabled">Prev</span></li>
														<li><a href="#" class="page active">1</a></li>
														<li><a href="#" class="page">2</a></li>
														<li><a href="#" class="page">3</a></li>
														<li><span>&hellip;</span></li>
														<li><a href="#" class="page">8</a></li>
														<li><a href="#" class="page">9</a></li>
														<li><a href="#" class="page">10</a></li>
														<li><a href="#" class="button">Next</a></li>
													</ul>
									<hr class="major" />
										
										<div id="one"></div>
													
													<p><span class="image left"><img src="images/pic01.jpg" id="image" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
													<div class="col-6 col-12-small">
													<ul class="icons">
							<button onclick="myFunction()"><img src="images/like.png" alt="dislike" ></button>
							<button onclick="myFunction()"><img src="images/dislike.png" alt="dislike" ></button>
							<li><button onclick="myFunction()"><img src="images/chat-bubble.png" alt="dislike" ></button></li>		
																<div class="form-group">

																



<div id="myDIV">
					<div class="form-group">
															<br>						
																<label for="comment">Commentaire :</label>
																<textarea class="form-control" rows="3" id="comment" placeholder="Ecrivez ce que vous ressentez"></textarea>
																</div>
															  <button type="submit" class="btn btn-primary" id="suk">Submit</button>
															</br>
								 
													</ul>

														</div>
										
									<!-- Elements -->
										
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												
												<!-- Lists -->
												<h3>Liste des commentaires</h3>
													<div class="row">
														<div class="col-6 col-12-small">
															<ol>
																

<div class="container">
<div class="row">
<div class="col-sm-12">

</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">

<img class="img-responsive user-photo" src="images/man2.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
text blablalbalblalbalblablalbalblalblablalblablalbalblalbalblalblalblabla
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->

<!-- /container --></ol></div></div>
													<h3>Evenements Passer</h3>
													<div class="row">
														<div class="col-6 col-12-small">
															<ol>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
															</ol>
															
															
													
														</div>
																
													<div class="box">
														<p>Seulement les membres de la BDE peuvent poster des articles</p>
													</div>
													</div>
													
													


												
													

													

												<!-- Box -->
													

												
											</div>
										</div>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<?php
                require 'functions/sidebar2.php';                    
                    ?>  
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

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
function jump(h){
    var top = document.getElementById(h).offsetTop;
    window.scrollTo(0, top);
}

function changeIt(img)
{
var name = img.src;

document.getElementById("image").setAttribute("src",name);


}

$(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });

</script>

	</body>
</html>