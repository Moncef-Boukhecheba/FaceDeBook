<?php


class ProduitManager
{
  private $_db; // Instance de PDO.

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Produit $produit)
  {
   
  }

  public function delete(Produit $produit)
  {
    
  }

  public function get($id)
  {
     $id = (int) $id;

    $q = $this->_db->query('SELECT  Nom_produit, Description_produit, Prix,Categorie FROM Produits WHERE Id_produit = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return $donnees;
  }

  public function getList()
  {
   
    
    $produits = [];

    $q = $this->_db->query('SELECT Id_produit, Nom_produit, Description_produit, Prix,Categorie,Image_produit FROM Produits ');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
     
      $pr= new Produit($donnees['Id_produit'],$donnees['Nom_produit'],$donnees['Description_produit'],$donnees['Prix'],$donnees['Categorie'],$donnees['Image_produit']);
      
        $produits[]=$pr;
      
    }


      return $produits;
  }

  public function getcartList($id){

    $produits = [];

    $q = $this->_db->query('select * from commandes NATURAL JOIN concerner NATURAL JOIN produits WHERE Id_visiteur='.$id.' AND Validation_commande=0 ');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      
      
      $pr= new Produit($donnees['Id_produit'],$donnees['Nom_produit'],$donnees['Description_produit'],$donnees['Prix'],$donnees['Categorie'],$donnees['Image_produit']);

      $produits[]=$pr;
      
       
      
    }


      return $produits;

  }
  public function deletcart($id_commande,$id_produit){
       $id_commande = (int) $id_commande;
       $id_produit = (int) $id_produit;

    $q = $this->_db->query('DELETE FROM concerner WHERE Id_commande ='.$id_commande);
    
 
    }
    

  public function update(Produit $produit)
  {
   
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

 
    
?>
