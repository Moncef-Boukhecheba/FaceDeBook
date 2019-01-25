<?php 
/**
 * 
 */
class User
{
	private $_id_visiteur;
	private $_nom;
	private $_prenom;
	private $_email;
    private $_password;
    private $_access;
    private $_avatar;
	

	function __construct($id_visiteur,$nom,$prenom,$email,$password,$access,$avatar)
	{
			$this->_id_visiteur=$id_visiteur;
			$this->_nom=$nom;	
			$this->_prenom=$prenom;
			$this->_email=$email;
            $this->_password=$password;
            $this->_access=$access;
            $this->_avatar=$avatar;
		

			//echo  "nom : ".$this->_nom_produit." contenu : ".$this->_contenu_produit." prix : ".$this->_prix;
	}


	
	
 	public function Id_visiteur(){
		return $this->_id_visiteur;
	}
	public function Nom (){
		return $this->_nom;
	}
	public function Prenom(){
		return $this->_prenom;
	}
	public function Email(){
		return $this->_email;
	}
	public function Password(){
		return $this->_password;
    }
    public function Access(){
		return $this->_access;
    }
    public function Avatar(){
		return $this->_avatar;
	}
	
	public function setid_visiteur($nom_produit){
		$this->_id_visiteur=$nom_produit;	
	}
	public function setNom($nom){
		$this->_nom=$nom;	
	}
	public function setPrenoms($prix){
		$this->_prenom=$prix;	
	}
	public function setEmail($categorie){
		$this->_email=$categorie;	
	}
	public function setPassword($img){
		$this->_password=$img;	
    }
    public function setAccess($img){
		$this->_access=$img;	
    }
    public function setAvatar($img){
		$this->_avatar=$img;	
    }
	
}

 ?>