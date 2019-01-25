<?php


class IdeeManager
{
  private $_db; // Instance de PDO.

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add()
  { 
     

  }

  public function delete()
  {
    
  }

  public function get($id)
  {
    /* $id = (int) $id;

    $q = $this->_db->query('SELECT  Nom_produit, Contenu_produit, Prix,Categorie FROM Produits WHERE Id_produit = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return $donnees;*/
  }
 
 

    

  

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

 
    
?>
