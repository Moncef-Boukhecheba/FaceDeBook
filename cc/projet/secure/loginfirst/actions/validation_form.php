<?php 

function validation_post(){ // Vérification par expressions régulières
    $email_valid = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}$/', $_POST['email']);
    $pass_valid = preg_match('/(?=.*?[0-9])(?=.*?[A-Z]).+/', $_POST['password']);
    $xss_valid = noXSS($_POST);
    return $email_valid && $pass_valid;
}

function noXSS($data){
    foreach($data as $key=>$value){
        $value = htmlspecialchars($value);
    }
}
?>