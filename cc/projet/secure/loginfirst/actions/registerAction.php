<?php
require("API.php");
require("dbloginregister.php");
require("validation_form.php");

// Récupération des variables dans le POST
$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Pass = $_POST['password'];
$Access = $_POST['access'];

// On valide le formulaire
$valid = validation_post();

if($valid){
  
  if (!empty($Nom) && !empty($Prenom) && !empty($Email) && !empty($Pass) && !empty($Access)){
    $bddman = new DBManager("bde_alger", "root", "245136");
    $req = $bddman->login($Email, null);
    
    if(!$req->fetch()){    
      // Instanciation d'un API Manager et envoi d'une requête GET
      $Api = new APIManager("http://localhost:3000/visiteurs");
      $res = $Api->get($Email, null);
      
      if (json_decode($res)){
        setSession_failed();
      }
      
      else {
          // Ajout du profil dans la bdd locale
          $res = $bddman->register($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], 0);
          $res = $Api->post($Nom, $Prenom, $Email, $Pass, 1, 0);
          
          setSession_success(); // Connexion réussie
        }
      }
      
      else {
        setSession_failed(); // Connexion echouée
      }
      
    }
  }
  
  function setSession_failed(){ // Redirection et envoi de l'information de l'echec à la page d'inscription
    session_start();
    $_SESSION['failed'] = true;
    header('Location: ../register.php');
  }
  
  function setSession_success(){ // Redirection de l'utilisateur à la page d'attente
    header('Location: ../register_wait.php');
  }
  
 
  ?>