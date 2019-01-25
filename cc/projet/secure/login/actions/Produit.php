<?php 
/**
 * 
 */
class Produit
{
	private $_Id_produit;
	private $_nom_produit;
	private $_descrition_produit;
	private $_prix;
	private $_categorie;
	private $_img;

	function __construct($id_produit,$nom_produit,$descrition_produit,$prix,$categorie,$img)
	{
			$this->_Id_produit=$id_produit;
			$this->_nom_produit=$nom_produit;	
			$this->_descrition_produit=$descrition_produit;
			$this->_prix=$prix;
			$this->_categorie=$categorie;
			$this->_img=$img;

			//echo  "nom : ".$this->_nom_produit." descrition : ".$this->_descrition_produit." prix : ".$this->_prix;
	}
	
	public function affichage(){
		echo " <div class=\"col-sm-4\">
                            <div class=\"col-item\">
                                <div class=\"photo\">
                                    <img src=\"images/IMG_produit/".$this->_img."\" class=\"img-responsive\" alt=\"a\" style=
                                    \"width: 300px; height: 300px;\" />
                                </div>
                                <div class=\"info\">
                                    <div class=\"row\">
                                        <div class=\"price col-md-6\">
                                            <h5>".$this->_nom_produit. "</h5>
                                                <p class=\"group inner list-group-item-text\">".$this->_descrition_produit."</p>
                                            <h5 class=\"price-text-color\">".$this->_prix." €</h5>
                                        </div>
                                        <div class=\"rating hidden-sm col-md-6\">
                                            <i class=\"price-text-color fa fa-star\"></i><i class=\"price-text-color fa fa-star\">
                                            </i><i class=\"price-text-color fa fa-star\"></i><i class=\"price-text-color fa fa-star\">
                                            </i><i class=\"fa fa-star\"></i>
                                        </div>
                                    </div>
                                    <div class=\"separator clear-left\">
                                        <p class=\"btn-add\">
                                            
                                         <form class=\"addproduit\" action=\"actions/addtocart.php\" method=\"post\" >

                                         <input class=\"hid\" type=\"hidden\" name=\"id_produit\" value=\"".$this->_Id_produit."\" /> 

                               
                                    <button id=\"addbtn\"  type=\"submit\" class=\"btn btn-success\" >Add to cart</button>
                                    </form>
                                        
                                    </div>
                                    <div class=\"clearfix\">
                                    </div>
                                </div>
                            </div>
                        </div>

                ";
	}
 	
 	public function affichagecart (){

 		echo '
 		<tr id="'.$this->_Id_produit.'">
											<td><img src="images/IMG_produit/'.$this->_img.'"  style=
                                    "width: 70px; height: 70px;"class="img-responsive voc_list_preview_img" alt="" title="'.$this->_nom_produit.'" ></a></td>
											<td>'.$this->_nom_produit.'</td>
											<td>'.$this->_descrition_produit.'</td>
											<td>1</td>
											<td>'.$this->_prix.'</td>

											<td>
												 <div id="deletform">
                         <form   class ="deleteproduit" action="#" method="post" >
                         <input class="hid" type="hidden" name="id_produit" value="'.$this->_Id_produit.'" />
                         
                        <button id ="deletebtn" type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove" ></span> Remove
                        </button></form></div>
											</td>
											
                      						
											
										</tr>



 		';
 	}
	  
	
	public function nom_produit(){
		return $this->_nom_produit;
	}
	public function descrition_produit (){
		return $this->_descrition_produit;
	}
	public function prix(){
		return $this->_prix;
	}
	public function categorie(){
		return $this->_categorie;
	}
	public function img(){
		return $this->_img;
	}
	public function setnom_produit($nom_produit){
		$this->_nom_produit=$nom_produit;	
	}
	public function setDescrition_produit($descrition_produit){
		$this->_descrition_produit=$descrition_produit;	
	}
	public function setPrix($prix){
		$this->_prix=$prix;	
	}
	public function setCategorie($categorie){
		$this->_categorie=$categorie;	
	}
	public function setImg($img){
		$this->_img=$img;	
	}
}

 ?>