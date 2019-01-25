<?php


class EventManager
{
  private $_db; // Instance de PDO.

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function affiche_last($nb){
    

    $q = $this->_db->query('SELECT * FROM manifestations GROUP BY Id_manifestation DESC LIMIT '.$nb);
    $donnees = $q->fetch(PDO::FETCH_ASSOC); 
    $e= new Event($donnees["Id_manifestation"],$donnees["Id_Validateur"],$donnees["Id_Proposeur"],
    $donnees["Titre_manifestation"],$donnees["Contenu_manifestation"],$donnees["Date_manifestation"]
    ,$donnees["Image_manifestation"],$donnees["Active"],$donnees["Nbr_Likes"],$donnees["Nbr_Commentaires"],$donnees["Payante"],$donnees["Reccurrente"]);
    return $e;
  }
  // ** fonction pour ajouter une manifestation ***

  public function add(Event $event,$id_v,$id_p)
  { 
    /*INSERT INTO manifestations (Id_Validateur,Id_Proposeur,Titre_manifestation,Contenu_manifestation,Date_manifestation,Image_manifestation,Active,Nbr_Likes,Nbr_Commentaires,Payante,Reccurrente)
    VALUES (1,2,'titre','contenu','2000-05-05','imagePath',1,0,0,0,0)*/
    
    $sel = $this->_db->prepare("INSERT INTO manifestations (Id_Validateur,Id_Proposeur,Titre_manifestation,Contenu_manifestation,Date_manifestation,Image_manifestation,Active,Nbr_Likes,Nbr_Commentaires,Payante,Reccurrente)
    VALUES (:id_v,:id_p,:titre,:contenu,:dates,:imagePath,0,0,0,:p,:recur)");
    $sel->execute(array(
   'id_v' => $id_v,
   'id_p' => $id_p,
   'titre'=>$event->get_titre_manifestation(),
   'contenu'=>$event->get_contenu_manifestation(),
   'dates'=>$event->get_date_manifestation(),
   'imagePath'=>$event->get_image_manifestation(),
   'p'=>$event->get_payante(),
   'recur'=>$event->get_reccurrente()

   ));
     

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
