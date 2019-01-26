<?php
require("API.php");
require("dbloginregister.php");
require("../../user.php");
require("validation_form.php");

// Récupération des variables dans le POST
noXSS($_POST);
$email = $_POST['email'];
$pass = $_POST['Password'];

if (!empty($email) || !empty($pass)) {
    
    // Verification de la présence de l'email et mdp dans la base locale
    $bddman = new DBManager("bde_alger", "root", "245136");
    $req = $bddman->login($email, $pass);
    $res = $req->fetch(PDO::FETCH_ASSOC);

    if(!$res){ // Si rien n'est trouvé dans la base de données locale
        
        // Instanciation d'un API Manager et envoi d'une requête GET au serveur à distance
        $Api = new APIManager("http://localhost:3000/visiteurs");
        $res = $Api->get($email, $pass);
        
        if (json_decode($res) && $res !='{"message":"No token provided."}' && $res !='{"message":"invalid token"}' ){
            $assoclist = json_decode($res, true); // Le résultat json est converti en tableau associatif
            $assoc = $assoclist[0];
            
            // Ajout du profil dans la bdd locale
            $bddman->register($assoc['Nom'], $assoc['Prenom'], 
            $assoc['Email'], $assoc['Password'], $assoc['Access'], $assoc['Avatar']);
            
            setSession_success($assoc); // Connexion réussie
        }
        else {
            setSession_failed(); // Connexion échouée
        }  
    }
    else { 
        setSession_success($res); // Connexion réussie
    }
}

// Fonctions :
function setSession_success($data){
    session_start();
    $user = new User($data['Id_visiteur'], $data['Nom'], $data['Prenom'], $data['Email'], $data['Password'], $data['Access'], $data['Avatar']);

    $_SESSION['user'] = serialize($user);
    header('Location: ../../login/index.php');
    
}

function setSession_failed(){
    session_start();
    $_SESSION['failed'] = 1;
    header('Location: ../login.php');
}

function setSession_notvalidated(){ // Redirection de l'utilisateur à la page d'attente
    header('Location: ../register_wait.php');
}
?>