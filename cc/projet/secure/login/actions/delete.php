<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
$d=array();


       $id_produit=$_POST["id_produit"];
      
         
   
     $bdd->query('DELETE FROM concerner WHERE Id_commande =1 and Id_produit='.$id_produit);
     $d["test"]="elle a etais suprimer";
        $d["erreur"]="ok";
    

echo json_encode($d);
?>