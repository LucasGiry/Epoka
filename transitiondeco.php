<!DOCTYPE html>
<html>

<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="bootstrap/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="bootstrap/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/util.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/main.css">
<!--===============================================================================================-->

</head>

	<body>

<br/>
		<div class="alert alert-danger alert-dismissible"> <strong> Déconnexion </strong> 
		</div>

			<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(bootstrap/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Connexion
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="connexion.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Identifiant manquant">
						<span class="label-input100">Identifiant</span>
						<input class="input100" type="text" name="identifiant" placeholder="Enter votre Identifiant">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mote de passe manquant">
						<span class="label-input100">Mot de Passe</span>
						<input class="input100" type="password" name="mdp" placeholder="Enter votre Mot de passe">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="bootstrap/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/vendor/bootstrap/js/popper.js"></script>
	<script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/vendor/daterangepicker/moment.min.js"></script>
	<script src="bootstrap/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/js/main.js"></script>
	</body>
</html>