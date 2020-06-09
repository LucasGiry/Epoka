<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=epoka_project;charset=utf8','root', '');
}
catch(Exception $e) {
  die('Erreur : '.$e->getMessage());
}

$id = $_GET['id'];
$req = $bdd->prepare('UPDATE mission SET Mis_Paiement = 1 WHERE Mis_No = :id');
$req->bindValue(':id', $id, PDO::PARAM_INT);
$req->execute(); 
header('Location: paiementsFrais.php')
?>
