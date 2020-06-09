<?php
session_start(); 
if (!isset($_SESSION['Sal_No'])){
    die(header('Location:index.php'));
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=epoka_project;charset=utf8','root', '');
}
 catch(Exception $e) {
   die('Erreur : '.$e->getMessage());
}


if(!isset($_POST["Par_IndemniteKm"])) {
    die('Erreur : Champ d\'indemnité km vide');
}
else {
    $Par_IndemniteKm = $_POST["Par_IndemniteKm"];
	
}

if(!isset($_POST["Par_IndemniteJournee"])) {
    die('Erreur : Champ d\'indemnité d\'hébergement vide');
}
else {
    $Par_IndemniteJournee = $_POST["Par_IndemniteJournee"];
	
}



var_dump($Par_IndemniteKm);
var_dump($Par_IndemniteJournee);


$req = $bdd->prepare('INSERT INTO parametre(Par_IndemniteKm, Par_IndemniteJournee) VALUES (:Par_IndemniteKm,:Par_IndemniteJournee)');
$req->bindValue(':Par_IndemniteKm', $Par_IndemniteKm, PDO::PARAM_INT);
$req->bindValue(':Par_IndemniteJournee',   $Par_IndemniteJournee,   PDO::PARAM_INT);

$req->execute();


header ('Location: http://localhost/Projet_Epoka/parametre.php');
?>