<?php
session_start();
if (!isset($_SESSION['Sal_No'])){
	die(header('Location:index.php'));
}
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

			<div class="alert alert-success alert-dismissible"> <strong> Vous êtes connecté ! </strong> </div>

	  </main>
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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