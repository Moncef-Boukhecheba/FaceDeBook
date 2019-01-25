<?php


class IdeeManager
{
  private $_db; // Instance de PDO.

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Idee $idee)
  { 
     $req = $this->_db->prepare('INSERT INTO idees (Date_idee, Contenu_idee,Nbr_votes,Id_visiteur) VALUES (now(),:contenu, 0,:id )');
     $req->execute(array(
     
     'contenu' => $idee->Contenu_idee(),
     'id' => $idee->Id_visiteur()
     
     
     ));
    

  }

  public function delete(Produit $produit)
  {
    return 'test';
  }

  public function get($id)
  {
     $id = (int) $id;

    $q = $this->_db->query('SELECT  Nom_produit, Contenu_produit, Prix,Categorie FROM Produits WHERE Id_produit = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return $donnees;
  }
  public function checkVote(Idee $idee,$id_user){
    $sel = $this->_db->prepare("SELECT * FROM votes Where id_visiteur = :id AND Id_idee = :id_idee");
    $sel->execute(array(
   'id' => $id_user,
   'id_idee'=>$idee->Id_idee()
   ));
    $test=$sel->fetch(); 
    if (!$test){
      $result=0;

    }else{
      $result=1;
    }
    return $result;
  }
  public function getList()
  {
   
    
    $idee = [];

    $q = $this->_db->query('SELECT Id_idee,Date_idee, Contenu_idee,Nbr_votes,Id_visiteur FROM idees');
    $test=$q->fetch();
    
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
     
      $pr= new Idee ($donnees['Id_idee'],$donnees['Date_idee'],$donnees['Contenu_idee'],$donnees['Nbr_votes'],$donnees['Id_visiteur']);
      
        $idees[]=$pr;
      
    }


      return $idees;
  }
  public function voter( $id, $id_user){
    //INSERT INTO votes (Id_visiteur,Id_idee) VALUES (1,1) 
    //SELECT * FROM votes WHERE Id_visiteur=1 AND Id_idee=1

    $sel = $this->_db->prepare("SELECT * FROM votes Where id_visiteur = :id AND Id_idee = :id_idee");
    $sel->execute(array(
   'id' => $id_user,
   'id_idee'=>$id
   ));

    $test=$sel->fetch();
    if (!$test){
      $sel = $this->_db->prepare("INSERT INTO votes (Id_visiteur,Id_idee) VALUES(:id , :id_idee) ");
    $sel->execute(array(
   'id' => $id_user,
   'id_idee'=>$id
  
   ));
   $sel = $this->_db->prepare("UPDATE idees SET Nbr_votes=Nbr_votes+1 WHERE Id_idee= :id_idee ");
   $sel->execute(array(
  
  'id_idee'=>$id
 
  ));
   
   //UPDATE idees SET Nbr_votes=Nbr_votes+1 

   $result="ajouter";
    }else{
      $sel = $this->_db->prepare("DELETE FROM votes WHERE Id_visiteur=:id AND Id_idee=:id_idee ");
      $sel->execute(array(
     'id' => $id_user,
     'id_idee'=>$id
    
     ));
     $sel = $this->_db->prepare("UPDATE idees SET Nbr_votes=Nbr_votes-1 WHERE Id_idee= :id_idee ");
     $sel->execute(array(
    
    'id_idee'=>$id
   
    ));
      $result="suprimer le vote";
    }
return $result;
  }

  
  public function deletidee(){
     
    
 
    }
    

  

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

 
    
?>
