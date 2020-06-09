<?php
if(!isset($_GET['Sal_No']) || !isset($_GET['Sal_MotDePasse']))
$erreur = "";
try{
    $bdd= new PDO ('mysql:host=localhost;dbname=epoka_project', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $req = $bdd->prepare("SELECT Sal_No FROM salarie WHERE Sal_No = no AND Sal_MotDePasse = mdp");
        if($req->execute(array($_GET['Sal_No'], $_GET['Sal_MotDePasse'])))
        {
            if($req->rowCount()==1){
                $lign = $req->fetch();
                echo $lign[0];
            }
            else{
                throw new Exception("Identifiant ou mot de passe incorrect");
            }
        }
}
catch(Exception $e){
    die("Erreur :" . $e->getMessage());
}
    
?>