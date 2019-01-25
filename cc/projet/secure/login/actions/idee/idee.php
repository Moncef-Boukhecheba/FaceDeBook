<?php 
/**
 * 
 */
class Idee
{
	private $_Id_idee;
	private $_date_idee;
	private $_contenu_idee;
	private $_nbr_vote;
	private $_id_visiteur;
	

	function __construct($id_idee,$date_idee,$contenu_idee,$nbr_vote,$id_visiteur)
	{
			$this->_Id_idee=$id_idee;
			$this->_date_idee=$date_idee;	
			$this->_contenu_idee=$contenu_idee;
			$this->_nbr_vote=$nbr_vote;
			$this->_id_visiteur=$id_visiteur;
		

			//echo  "nom : ".$this->_nom_produit." contenu : ".$this->_contenu_produit." prix : ".$this->_prix;
	}

	public function affiche($checkVote){
		if($checkVote==1){
		echo'
		<article>
								
		<div class="panel" style="box-shadow: 1px 2px 3px grey" >
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
							<div class="col-sm-2">
							<form class="voter" action="#" method="post" >
							
							<input class="id_idee" type="hidden" name="id_idee" value="'.$this->_Id_idee.'" />
							 <button   type="submit" class="button" style="background-color: gray">Voter</button>
							 </form>
							
                            </div>
                            <div class="col-sm-9">
								<h4 class="pull-right">
								<p >Votes :</p>
								<p class ="nbrvotes">'.$this->_nbr_vote.'</p>
                                <small><em>'.$this->_date_idee.'</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="panel-body" >
               '.$this->_contenu_idee.' 
            </div>          
        </div>
											
</article>';}else{
	echo'
		<article>
								
		<div class="panel" style="box-shadow: 1px 2px 3px grey" >
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
							<div class="col-sm-2">
							<form class="voter" action="#" method="post" >
							
							<input class="id_idee" type="hidden" name="id_idee" value="'.$this->_Id_idee.'" />
							 <button   type="submit" class="button" style="background-color: rgba(245, 106, 106, 0.075)">Voter</button>
							 </form>
							
                            </div>
							<div class="col-sm-9">
							
								<h4 class="pull-right">
								<p >Votes :</p>
								<p class ="nbrvotes">'.$this->_nbr_vote.'</p>
								 
                                <small><em>'.$this->_date_idee.'</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="panel-body" >
               '.$this->_contenu_idee.' 
            </div>          
        </div>
											
</article>';

}

	}
	
	
 	public function Id_idee(){
		return $this->_Id_idee;
	}
	public function Contenu_idee (){
		return $this->_contenu_idee;
	}
	public function Nbr_vote(){
		return $this->_nbr_vote;
	}
	public function Id_visiteur(){
		return $this->_id_visiteur;
	}
	public function Date_idee(){
		return $this->_date_idee;
	}
	
	public function setId_idee($nom_produit){
		$this->_Id_idee=$nom_produit;	
	}
	public function setContenu_idee($Contenu_idee){
		$this->_contenu_idee=$Contenu_idee;	
	}
	public function setNbr_votes($prix){
		$this->_nbr_vote=$prix;	
	}
	public function setId_visiteur($categorie){
		$this->_id_visiteur=$categorie;	
	}
	public function setDate_idee($img){
		$this->_date_idee=$img;	
	}
	  
	
	
}

 ?>