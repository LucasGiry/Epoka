<?php 
session_start();
try {
	$bdd = new PDO('mysql:host=localhost;dbname=epoka_project;charset=utf8','root', '');
}
catch(Exception $e) {
  die('Erreur : '.$e->getMessage());
}

$identifiant 	= $_POST['identifiant']; 
$mdp 			= $_POST['mdp'];

if(!empty($identifiant) AND !empty($mdp)){
		//  Récupération de l'utilisateur et de son mdp
		$req 		= $bdd->prepare('SELECT Sal_No, Sal_NoResponsable, Sal_Statut FROM salarie WHERE Sal_No = ? AND Sal_MotDePasse = ?');
		$req->execute(array($identifiant, $mdp));
		$persexist	= $req->rowCount();
	
if($persexist == 1){
	$persinfo							= $req->fetch();
	$_SESSION['Sal_No'] 				= $persinfo[0];
	$_SESSION['Sal_NoResponsable'] 		= $persinfo[1];
	$_SESSION['Sal_Statut']  			= $persinfo[2];
	header ('Location: http://localhost/Projet_Epoka/transitionco.php'); 
} 
else {
	header ('Location: http://localhost/Projet_Epoka/mauvais_id.php'); 
	}
} 

?>


<!-- else {
	echo "<script>alert('Identifiant ou mot de passe incorrecte !')</script>"; // FAIRE UN MESSAGE BOX OU HEADER 
	}
} --> 