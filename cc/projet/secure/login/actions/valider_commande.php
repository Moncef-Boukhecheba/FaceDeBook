<?php
$d=array();
session_start();
$id_user=$_SESSION["id_visiteur"];


$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');

    var_dump($id_user);
   
 
     $sel = $bdd->prepare(" UPDATE commandes SET Validation_commande = 1 WHERE Id_visiteur= :id ");
     $sel->execute(array(
    'id' => $id_user
     
    ));
     $d["statement"]="elle a modifier";

   
      
        echo json_encode($d);
 
  ?>