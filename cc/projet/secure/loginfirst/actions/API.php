<?php 
class APIManager
{   
    public $url = "";
    
    public function __construct($url){
        $this->url = $url;
    }
    // cURL POST 
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
        
        // cURL OPTIONS
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
    
    // cURL PUT 
    public function put($postfields){  
        $curl = curl_init($this->url);
        
        // cURL OPTIONS
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
    
    // cURL GET 
    public function get($Email, $Pass){  
        // Ici, on ajoute des paramètres à l'url
        if ($Pass){
            $curl = curl_init($this->url. '?email='. $Email.'&password='.$Pass); 
        }
        else {
            $curl = curl_init($this->url. '?email='. $Email);
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }
    
    // cURL DELETE
    public function delete($id){  
        $curl = curl_init($this->url. '/' .$id);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); // Requête = DELETE
        
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }   
}

?>