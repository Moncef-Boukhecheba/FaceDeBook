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
        
        $curl = curl_init($this->url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($postfields));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'                                                                      
        )); 
        
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }

    public function put($key, $value, $id){  
        $postfields = array(
            $key => $value,
            'id_visiteur' => $id
        );
        
        $curl = curl_init($this->url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
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
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }   
}

$Api = new APIManager("http://localhost:3000/visiteurs");
$res = $Api->put("Nom", "Moncef", 2);

var_dump(json_decode($res));
?>