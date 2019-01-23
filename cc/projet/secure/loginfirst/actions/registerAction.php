<?php
require("API.php");

// Récupération des variables dans le POST
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Pass = $_POST['password'];
$Access = $_POST['access'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bde_alger', 'root', '245136');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT Email FROM visiteurs_copie WHERE Email = :email');
$req->bindValue(":email", $Email, PDO::PARAM_STR);

if(!$req->fetch()){    
  // Instanciation d'un API Manager et envoi d'une requête GET
  $Api = new APIManager("http://localhost:3000/visiteurs");
  $res = $Api->get($Email, null);
  
  if (json_decode($res)){
    setSession_failed();
  }
  
  else {
    /*
    $postfields = array(
      $Nom = $_POST['nom'],
      $Prenom = $_POST['prenom'],
      $Email = $_POST['email'],
      $Pass = $_POST['password'],
      $Access = $_POST['access']
    );
    $res = $Api->post($postfields);*/
    setSession_success();
  }
}

else {
  setSession_success(); // Connexion réussie
}

function setSession_failed(){
  session_start();
  $_SESSION['failed'] = true;
  header('Location: ../register.php');
}

function setSession_success(){
  session_start();
  $_SESSION['failed'] = false;
  header('Location: ../register_wait.php');
}
?>