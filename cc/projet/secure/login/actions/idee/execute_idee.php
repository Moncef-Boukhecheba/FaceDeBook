<?php 
require 'idee.php';
require 'ideeManager.php';
$id_user=2;

$d=array();
if($_POST["action"]=="add"){
	$message=$_POST["message"];
$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
$manager = new IdeeManager($db);
$idee= new Idee(1,'2019-01-01',$message,0,$id_user);


$manager->add($idee);
$d["chek"]="ok";
}
if($_POST["action"]=="voter"){
	$d["chek"]="voter";
	$id_user=2;
	
$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
$manager = new IdeeManager($db);

$var=$manager->voter($_POST["id"],$id_user);
$d["vote_answer"]=$var;

}

	

echo json_encode($d);

?>