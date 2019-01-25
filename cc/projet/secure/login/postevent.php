
<!DOCTYPE HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?php
                require 'header.php';                    
                    ?>  

							<!-- Banner -->
								<section id="banner">
									
								</section>
                        <section>
						
  						


<div id="myDIV">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Evenements</legend>
            
           
            
            <form action="actions/evenement/execute.php" method="post" class="form" enctype="multipart/form-data" >
            <input class="id_idee" type="hidden" name="action" value="ajouter" />
            <input class="form-control" name="eventName" placeholder="Nombre del evento" type="text" />
            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Description de L'evenements"></textarea>
            <label for="">
               Date evenement</label>
               <input class="form-control" name="dateEvent" placeholder="example : 2018-06-15" type="text" />
            <label>Type Evenements</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <select class="form-control" name="P">
                        <option value="1">Payant</option>
						<option value="0">Gratuit</option>
                    </select>
                    <select class="form-control" name="R">
                        <option value="1">reccurrente</option>
						<option value="0">instant</option>
                    </select>
                </div>    
            </div>
             
            <label>Ajouter une photo a votre evenements</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="input-group image-preview">
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                  
    
    
                    Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->
                </div>    
            </div> 
            <input class="btn btn-lg btn-default btn-block" type="submit" value="Cree L'evenements" name="submit">
           
            </form>
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
