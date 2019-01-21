<?php
require("API.php");
// Récupération des variables dans le POST
$email = $_POST['email'];
$pass = $_POST['Password'];

//TODO : Verifier la bdd locale

if(!$req->fetch()){    
    // Instanciation d'un API Manager et envoi d'une requête GET
    $Api = new APIManager("http://localhost:3000/visiteurs");
    $res = $Api->get($email, $pass);
    
    if (json_decode($res)){
        $assoclist = json_decode($res, true); // Le résultat json est converti en tableau associatif
        $assoc = $assoclist[0];
        // TODO : INSERT BDD

        setSession_success($assoc);
    }
    else {
        setSession_failed(); // Connexion échouée
    }  
}

else {
    setSession_success($assoc); // Connexion réussie
}

// Fonctions :
function setSession_success($data){
    session_start();
    $_SESSION['id'] = $data['Id_visiteur'];
    $_SESSION['Nom'] = $data['Nom'];
    $_SESSION['Prenom'] = $data['Prenom'];
    $_SESSION['Email'] = $data['Email'];
    $_SESSION['Access'] = $data['Access'];
    $_SESSION['Avatar'] = $data['Avatar'];
    header('Location: ../login/index.php');
}

function setSession_failed(){
    session_start();
    $_SESSION['failed'] = true;
    header('Location: login.php');
}

?>