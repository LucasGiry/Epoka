<?php
session_start();
if (!isset($_SESSION['Sal_No'])){
	die(header('Location:index.php'));
}
$bdd = new PDO('mysql:host=localhost;dbname=epoka_project;charset=utf8','root', '');
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title>Projet Epoka</title>
	  <meta content="" name="descriptison">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <link href="assets/img/favicon.png" rel="icon">
	  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

	  <!-- Template Main CSS File -->
	  <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>
	
	<!-- ======= Header ======= -->
	   <header id="header" class="fixed-top">
		<div class="container">

		  <div class="logo float-left">
			<h1 class="text-light"><a href="index.html"><span>Projet Epoka</span></a></h1>
			
		  </div>

		  <nav class="nav-menu float-right d-none d-lg-block">
			<ul>
			  <li class="active"><a href="transitionco.php">Accueil</a></li>		 				  
			  <li><a href="paiementsMissions.php"> Validation des missions</a></li>
			  <li><a href="paiementsFrais.php"> Paiement des frais </a></li>
			  <li><a href="parametre.php">Paramétrage</a></li>		  
			  <li class="nav-item">
						<a class="nav-link" href="deconnexion.php">
							<img src="img/deconnexion.png" alt="Déconnexion" style="width:30px;height:30px;border:0;">
						</a>
			  </li>
			</ul>
		  </nav><!-- .nav-menu -->

		</div>
		
				<ul class="nav justify-content-end">
					
				</ul>
		
		
	  </header><!-- <!-- End #header -->


		<main id="main">
		<?php 
		if(!isset($_SESSION['Sal_Statut']) || $_SESSION['Sal_Statut'] == 0) { //     || signifie OR 

			echo '<br/> <div class="alert alert-danger alert-dismissible"> <strong> Vous n\'êtes pas autorisé ! </strong> </div>';
			exit;
		}
		?>


		<br/>


		  <div class="container">
			<h2> Paramétrage de l'application </h2>
			<hr>
			<br/>
			<h4><u> MONTANT DU REMBOURSEMENT AU KM </u></h4>

				<form method="post" action="montant.php">
					<label> Remboursement au km 		</label> : <input type="text" required  placeholder="000" name="Par_IndemniteKm" 	  id="Par_IndemniteKm" /> &nbsp; &nbsp;
					<label> Indemnité d'hébergement </label> : <input type="text" required  placeholder="000" name="Par_IndemniteJournee" id="Par_IndemniteJournee" /> 
					&nbsp; &nbsp;
					<input type="submit" value="Valider" class="btn login_btn">
				</form>


		<br/>
		<br/>
		<br/>

			<h4><u> DISTANCE ENTRE VILLES </u></h4>

				<form method="post" action="para.php">
		<?php
		$list ='';
		$req = $bdd->query('SELECT Vil_No, Vil_Nom FROM ville ORDER BY Vil_Nom, Vil_Categorie');
			foreach($req as $row){
				$list.= '<option value="'.$row[0].'">' .$row[1].'</option>';
			}
		?>

			De : <select name="distance1" id="distance1"><?= $list;?> </select> &nbsp; &nbsp;
			À  : <select name="distance2" id="distance2"><?=$list; ?> </select> &nbsp; &nbsp;
			Distance en Km : <input type="text" name="distKm"> 
				&nbsp; &nbsp;
		   <input type="submit" value="Valider" class="btn login_btn"> 
				</form>
				

		<br/>  
		<br/>  
		<br/>  


			<h4><u> DISTANCE ENTRE VILLES DÉJÀ SAISIES </u></h4>
		<?php
		echo '<table style="width: 50%">';
		echo '<tr>';
		echo '<th style= "background-color: grey">De</th><th style="background-color: grey">À</th><th style="background-color: grey">Km</th>';
		echo '</tr>';
		$req = $bdd->query('SELECT v1.Vil_Nom, v2.Vil_Nom, Dist_km FROM distance INNER JOIN ville as v1 ON Dist_NoVille1 = v1.Vil_No 
																																						 INNER JOIN ville as v2 ON Dist_NoVille2 = v2.Vil_No');
		foreach($req as $value){
			echo '<tr><td>'.$value[0].'</td><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
		}
		echo '<table>'
		?> </center>

		</div>
		</main>
		
		<!-- ======= Footer ======= -->
	  <footer id="footer">
		<div class="container">
		  <div class="copyright">
			&copy; Copyright <strong><span>Giry Lucas</span></strong>
		  </div>
		  
		  </div>
		</div>
	  </footer><!-- End #footer -->

	  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	  <!-- Vendor JS Files -->
	  <script src="assets/vendor/jquery/jquery.min.js"></script>
	  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	  <script src="assets/vendor/php-email-form/validate.js"></script>
	  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	  <script src="assets/vendor/venobox/venobox.min.js"></script>

	  <!-- Template Main JS File -->
	  <script src="assets/js/main.js"></script>

	

	</body>
</html>