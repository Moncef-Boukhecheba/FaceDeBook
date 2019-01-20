<?php 
class APIManager
{   
    
    public $url = "";

    public function __construct($url){
        $this->url = $url;
    }

    public function post($Nom, $Prenom, $Email, $Pass, $Centre, $Access){  
        $postfields = array(
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Email' => $Email,
            'Password' => $Pass,
            'Id_centre' => $Centre,
            'Access' => $Access
        );
        
        // On initialise la requête cURL 
        $curl = curl_init($this->url);
        
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Retourner les valeurs dans la fonction curl_exec 
        curl_setopt($curl, CURLOPT_POST, true);          // Requête = POST
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postfields)); // On envoie le tableau de données à insérer sous forme de JSON
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(  // On spécifie le type de données (JSON) dans le HEADER http                                                                    
            'Content-Type: application/json'                                                                      
        )); 
        
        $return = curl_exec($curl); // On stocke les informations envoyées par l'API dans la variable $return
        curl_close($curl); // On ferme la connexion
        return $return;
    }

    public function put($postfields){  
        $curl = curl_init($this->url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); // Requête = PUT 
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postfields));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'                                                                      
        )); 
        
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }

    public function get($id){  
        $curl = curl_init($this->url. '/'. $id);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
        
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }

    public function delete($id){  
        $curl = curl_init($this->url. '/' .$id);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); // Requête = DELETE

        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }   
}

$postfields = array(
    'Nom' => 'Boukhecheba',
    'Prenom' => 'Moncef',
    'Email' => 'moncefbkb@gmail.com',
    'id_visiteur' => 2
);

$Api = new APIManager("http://localhost:3000/visiteurs");
$res = $Api->put($postfields);

var_dump(json_decode($res));
?>