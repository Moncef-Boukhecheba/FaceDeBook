<?php 
/**
 * 
 */
class Event
{
    private $_id_manifestation;
    private $_id_validateur;
    private $_id_proposeur;
    private $_titre_manifestation;
    private $_contenu_manifestation;
    private $_date_manifestation;
    private $_image_manifestation;
    private $_active;
    private $_nbr_likes;
    private $_nbr_commentaires;
    private $_payante;
    private $_reccurrente;

	

	function __construct($id_manifestation,$id_validateur,$id_proposeur,$titre,$contenu,$date,$image,$active,$likes,$comment,$payante,$reccurrente)
	{
			$this->_id_manifestation=$id_manifestation;
			$this->_id_validateur=$id_validateur;	
			$this->_id_proposeur=$id_proposeur;
			$this->_titre_manifestation=$titre;
            $this->_contenu_manifestation=$contenu;
            $this->_date_manifestation=$date;
            $this->_image_manifestation=$image;
            $this->_image_manifestation=$image;
            $this->_active=$active;
            $this->_nbr_likes=$likes;
            $this->_nbr_commentaires=$comment;
            $this->_payante=$payante;
            $this->_reccurrente=$reccurrente;
			
	}
public function affiche_event_admin(){
    
    echo'
													
   
    <p><span class="image left"><img style=" width: 300px" src="images/IMG_event/'.$this->_image_manifestation.'" id="image" alt="" />
    <h2>'.$this->_titre_manifestation.'</h2>
    </span>'.$this->_contenu_manifestation.'</p>
	<ul class="icons">
	 
    </ul>
                                                        
													
';

}

	
	
 
	

    /**
     * Get the value of _id_manifestation
     */ 
    public function get_id_manifestation()
    {
        return $this->_id_manifestation;
    }

    /**
     * Set the value of _id_manifestation
     *
     * @return  self
     */ 
    public function set_id_manifestation($_id_manifestation)
    {
        $this->_id_manifestation = $_id_manifestation;

        return $this;
    }

    /**
     * Get the value of _id_validateur
     */ 
    public function get_id_validateur()
    {
        return $this->_id_validateur;
    }

    /**
     * Set the value of _id_validateur
     *
     * @return  self
     */ 
    public function set_id_validateur($_id_validateur)
    {
        $this->_id_validateur = $_id_validateur;

        return $this;
    }

    /**
     * Get the value of _id_proposeur
     */ 
    public function get_id_proposeur()
    {
        return $this->_id_proposeur;
    }

    /**
     * Set the value of _id_proposeur
     *
     * @return  self
     */ 
    public function set_id_proposeur($_id_proposeur)
    {
        $this->_id_proposeur = $_id_proposeur;

        return $this;
    }

    /**
     * Get the value of _titre_manifestation
     */ 
    public function get_titre_manifestation()
    {
        return $this->_titre_manifestation;
    }

    /**
     * Set the value of _titre_manifestation
     *
     * @return  self
     */ 
    public function set_titre_manifestation($_titre_manifestation)
    {
        $this->_titre_manifestation = $_titre_manifestation;

        return $this;
    }

    /**
     * Get the value of _contenu_manifestation
     */ 
    public function get_contenu_manifestation()
    {
        return $this->_contenu_manifestation;
    }

    /**
     * Set the value of _contenu_manifestation
     *
     * @return  self
     */ 
    public function set_contenu_manifestation($_contenu_manifestation)
    {
        $this->_contenu_manifestation = $_contenu_manifestation;

        return $this;
    }

    /**
     * Get the value of _date_manifestation
     */ 
    public function get_date_manifestation()
    {
        return $this->_date_manifestation;
    }

    /**
     * Set the value of _date_manifestation
     *
     * @return  self
     */ 
    public function set_date_manifestation($_date_manifestation)
    {
        $this->_date_manifestation = $_date_manifestation;

        return $this;
    }

    /**
     * Get the value of _image_manifestation
     */ 
    public function get_image_manifestation()
    {
        return $this->_image_manifestation;
    }

    /**
     * Set the value of _image_manifestation
     *
     * @return  self
     */ 
    public function set_image_manifestation($_image_manifestation)
    {
        $this->_image_manifestation = $_image_manifestation;

        return $this;
    }

    /**
     * Get the value of _active
     */ 
    public function get_active()
    {
        return $this->_active;
    }

    /**
     * Set the value of _active
     *
     * @return  self
     */ 
    public function set_active($_active)
    {
        $this->_active = $_active;

        return $this;
    }

    /**
     * Get the value of _nbr_likes
     */ 
    public function get_nbr_likes()
    {
        return $this->_nbr_likes;
    }

    /**
     * Set the value of _nbr_likes
     *
     * @return  self
     */ 
    public function set_nbr_likes($_nbr_likes)
    {
        $this->_nbr_likes = $_nbr_likes;

        return $this;
    }

    /**
     * Get the value of _nbr_commentaires
     */ 
    public function get_nbr_commentaires()
    {
        return $this->_nbr_commentaires;
    }

    /**
     * Set the value of _nbr_commentaires
     *
     * @return  self
     */ 
    public function set_nbr_commentaires($_nbr_commentaires)
    {
        $this->_nbr_commentaires = $_nbr_commentaires;

        return $this;
    }

    /**
     * Get the value of _payante
     */ 
    public function get_payante()
    {
        return $this->_payante;
    }

    /**
     * Set the value of _payante
     *
     * @return  self
     */ 
    public function set_payante($_payante)
    {
        $this->_payante = $_payante;

        return $this;
    }

    /**
     * Get the value of _reccurrente
     */ 
    public function get_reccurrente()
    {
        return $this->_reccurrente;
    }

    /**
     * Set the value of _reccurrente
     *
     * @return  self
     */ 
    public function set_reccurrente($_reccurrente)
    {
        $this->_reccurrente = $_reccurrente;

        return $this;
    }
}

 ?>