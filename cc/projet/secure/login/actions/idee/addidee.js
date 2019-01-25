var url = "actions/idee/execute_idee.php";



$(function () {

	//requete ajax pour ajouter une idee

	$(".addidee").submit(function () {
		var id_produit = $(this).find(".hid").val();
		var message = $(this).find("#message_idee").val();
		//alert(message);


		$.post(url, { action: "add", message: message }, function (data) {

			//alert(data.chek);
			$('#lo').load("actions/idee/affichage.php");

		}, "json");

		return false;
	})

	// requete ajax pour ajouter un vote

	$(".voter").submit(function () {
		var id_idee = $(this).find(".id_idee").val();
		var n = $(this).find(".button").css("background-color");

		if (n == "rgb(128, 128, 128)") {
			$(this).find(".button").css("background-color", "rgba(245, 106, 106, 0.075)");
			

		}
		if (n == "rgba(245, 106, 106, 0.075)") {
			$(this).find(".button").css("background-color", "rgb(128, 128, 128)");
		}
		//alert(id_idee);


		$.post(url, { action: "voter", id: id_idee }, function (data) {

			//alert(data.vote_answer);


		}, "json");




		return false;
	})

});