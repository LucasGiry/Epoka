<!-- DECONNEXION -->
<?php 
session_start();
session_unset(); 
session_destroy();
header ('Location: http://localhost/Projet_Epoka/transitiondeco.php'); 
exit();
?>




