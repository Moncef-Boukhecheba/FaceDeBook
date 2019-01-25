var url ="actions/delete.php";
$(function(){


$(".deleteproduit").submit(function(){
	var id_produit=$(this).find(".hid").val();
	

	$.post(url,{action:"deletecart",id_produit:id_produit},function(data){
	
		if (data.erreur=="ok") {
			 $("#"+id_produit).hide(100);

			
		}

	},"json");
	 	
	return false;
})
});