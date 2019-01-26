<?php 
class DBManager{
    
    private $bdd;
    
    // Le constructeur initialise la connexion
    public function __construct($dbname, $user, $pass){
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
    
    // Cette fonction vérifie dans la base de données que l'utilisateur existe (pour la connexion et l'inscription)
    public function login($email, $pass){
        if ($pass == null){
            $req = $this->bdd->prepare('SELECT * FROM visiteurs_copie WHERE Email = :email');
            $req->bindValue(":email", $email, PDO::PARAM_STR);
        }
        else {
            $req = $this->bdd->prepare('SELECT * FROM visiteurs_copie WHERE Email = :email  AND Password = :password');
            
            $req->bindValue(":email", $email, PDO::PARAM_STR);
            $req->bindValue(":password", $pass, PDO::PARAM_STR);
        }

        $req->execute();
        
        return $req;
    }   
    
    // Cette fonction ajoute le profil de l'utilisateur dans la bdd locale
    public function register($name, $surname, $email, $pass, $access, $avatar){
        $req = $this->bdd->prepare(
            'Insert into visiteurs_copie(Nom, Prenom, Email, Password, Access, Avatar) 
            VALUES (:name,:surname,:email,:pass,:access,:avatar)');
            
            $req->bindValue(":name", $name, PDO::PARAM_STR);
            $req->bindValue(":surname", $surname, PDO::PARAM_STR);
            $req->bindValue(":email", $email, PDO::PARAM_STR);
            $req->bindValue(":pass", $pass, PDO::PARAM_STR);
            $req->bindValue(":access", $access, PDO::PARAM_STR);
            $req->bindValue(":avatar", $avatar, PDO::PARAM_STR);
            
            $req->execute();
            
            return $req;
        }   
    }
    
    
    ?>