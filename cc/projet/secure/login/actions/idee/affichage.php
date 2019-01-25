<?php

require 'idee.php';
require 'ideeManager.php'; 

$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
$manager = new IdeeManager($db);
$data =$manager->getList();



foreach($data as $element)
{	$chekVote=$manager->checkVote($element,2);
     $element->affiche($chekVote); // affichera le idees

}


  ?>
									




