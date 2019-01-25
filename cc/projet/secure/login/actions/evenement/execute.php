<?php 
require 'event.php';
require 'eventManager.php';

$target_dir = "../../images/IMG_event/";
$target_file = $target_dir . $_POST["eventName"].".png";
var_dump($target_file );
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }
}
$path=$_POST["eventName"].".png";

$event=new Event(1,1,1,$_POST["eventName"],$_POST["message"],$_POST["dateEvent"],$path,0,0,0,$_POST["P"],$_POST["R"]);
$db = new PDO('mysql:host=localhost;dbname=bde_alger', 'root', '');
$manager = new EventManager($db);
$manager->add($event,1,1);

header("Location: ../../last_event.php");
?>