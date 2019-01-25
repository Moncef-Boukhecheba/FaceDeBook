<?php
$d=array();
session_start();
$id_user=$_SESSION["id_visiteur"];


$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');

    
   
 
     $sel = $bdd->prepare("SELECT * FROM commandes Where id_visiteur = :id AND Validation_commande = 0");
     $sel->execute(array(
    'id' => $id_user
     
    ));
$test=$sel->fetch();

if (!$test){
 $req = $bdd->prepare('INSERT INTO commandes (Date_commande,Validation_commande,Id_visiteur) VALUES (now(),:validation, :id )');
     $req->execute(array(
     
     'validation' => 0,
     'id' => $id_user
     
     
     ));
      $q = $bdd->query('SELECT Id_commande FROM commandes ORDER BY Id_commande DESC LIMIT 1 ');
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    $Id_commande=$donnees['Id_commande'];

    $req = $bdd->prepare('INSERT INTO concerner (Id_produit,Id_commande) VALUES (:id_produit,:id_commande)');
     $req->execute(array(
     'id_produit'=> $_POST['id_produit'],
     'id_commande' => $Id_commande 
     ));
     $d["erreur"]="ok";
     $d["ajout"]="concerner et commande";


    }
    else {
       
           $req = $bdd->prepare('INSERT INTO concerner (Id_produit,Id_commande) VALUES (:id_produit,:id_commande)');
     $req->execute(array(
     'id_produit'=> $_POST['id_produit'],
     'id_commande' => $test['Id_commande']
     ));
     $d["erreur"]="ok";
     $d["ajout"]="zebi";
}
   
      
        echo json_encode($d);
 
  ?>