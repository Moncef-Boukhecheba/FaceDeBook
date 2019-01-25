var url ="actions/addtocart.php";
$(function(){
$(".addproduit").submit(function(){
	var id_produit =  $(this).find(".hid").val();
   
	$.post(url,{id_produit:id_produit},function(data){
	
		if (data.erreur=="ok") {
			
	
		}

	},"json");
	 	alert(id_produit);
	return false;
})
});