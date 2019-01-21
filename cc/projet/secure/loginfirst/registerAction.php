<?php
require("API.php");

// Récupération des variables dans le POST
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Pass = $_POST['password'];
$Access = $_POST['access'];

if(!$req->fetch()){    
  // Instanciation d'un API Manager et envoi d'une requête GET
  $Api = new APIManager("http://localhost:3000/visiteurs");
  $res = $Api->get($email, $pass);
  
  if (json_decode($res)){
      $assoclist = json_decode($res, true); // Le résultat json est converti en tableau associatif
      $assoc = $assoclist[0];
  }
  else {
      
  }  
}

else {
  setSession_success($assoc); // Connexion réussie
}


?>