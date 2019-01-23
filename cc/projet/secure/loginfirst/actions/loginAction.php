<?php
require("API.php");
// Récupération des variables dans le POST
$email = $_POST['email'];
$pass = $_POST['Password'];

// Verification de la présence de l'email et mdp dans la base locale
if (!empty($email) || !empty($pass)) {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bde_alger', 'root', '245136');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    $req = $bdd->prepare('SELECT Email FROM visiteurs_copie WHERE Email = :email  AND Password = :password');
    
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->bindValue(":password", $pass, PDO::PARAM_STR);
    
    $req->execute();

    // Si rien n'est trouvé dans la base de données locale
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
        $res = $req->fetch(PDO::FETCH_ASSOC);
        setSession_success($res); // Connexion réussie
    }
}

// Fonctions :
function setSession_success($data){
    session_start();
    $_SESSION['id'] = $data['Id_visiteur'];
    $_SESSION['Access'] = $data['Access'];
    $_SESSION['Avatar'] = $data['Avatar'];
    $_SESSION['Nom'] = $data['Nom'];
    $_SESSION['Prenom'] = $data['Prenom'];
    //header('Location: ../../login/index.php');
    var_dump($data);
}

function setSession_failed(){
    session_start();
    $_SESSION['failed'] = 1;
    header('Location: ../login.php');
}
?>