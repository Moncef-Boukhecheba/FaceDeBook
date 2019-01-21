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
						

						<script>
	document.getElementById("myDIV").style.visibility = "hidden"						
   function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    
  } else {
   document.getElementById("myDIV").style.visibility = "visible"
  }
}
	
    </script>

  						


<div id="myDIV">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Evenements</legend>
            <form action="#" method="post" class="form" role="form">
            <input class="form-control" name="eventName" placeholder="Nombre del evento" type="text" />
            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Description de L'evenements"></textarea>
            <label for="">
                Formulaire d'evenements</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select class="form-control">
                        <option value="Day">Jours</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control">
                        <option value="Month">Mois</option>
                    </select>
                </div>
                <div class="col-xs-4 col-md-4">
                    <select class="form-control">
                        <option value="Year">Anee</option>
                    </select>
                </div>
            </div>
            <label>Type Evenements</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <select class="form-control">
                        <option value="Tipo">Payant</option>
						<option value="Tipo">Gratuit</option>
						<option value="Tipo">tralalalala</option>
						<option value="Tipo">blalblalblablla</option>
                    </select>
                </div>    
            </div>
             
            <label>Ajouter une photo a votre evenements</label>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Chercher</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->
                </div>    
            </div>
            <button class="btn btn-lg btn-default btn-block" type="submit">
                Cree L'evenements</button>
            </form>
        </div>
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
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>