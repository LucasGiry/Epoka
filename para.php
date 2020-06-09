<?php

try{
   $bdd = new PDO('mysql:host=localhost;dbname=epoka_project;charset=utf8','root', '');
}
catch(Exception $e){
    die("Erreur :" . $e->getMessage());
}

$villeDebut =   $_POST['distance1'];
$villeFin   =   $_POST['distance2'];
$distKm     =   $_POST['distKm'];

var_dump($villeDebut);
var_dump($distKm);
var_dump($villeFin);

$req = $bdd->prepare('INSERT INTO distance(Dist_NoVille1, Dist_NoVille2,Dist_km) VALUES (:villeDebut,:villeFin,:distKm)');
$req->bindValue(':villeDebut', $villeDebut, PDO::PARAM_INT);
$req->bindValue(':villeFin',   $villeFin,   PDO::PARAM_INT);
$req->bindValue(':distKm',     $distKm,     PDO::PARAM_INT);
$req->execute();

header ('Location: http://localhost/Projet_Epoka/parametre.php');
?>