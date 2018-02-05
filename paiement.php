<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paiement</title>

	
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

	
</head>

<body>
	<?php include('parts/header.php') ?>
	<div class="container-adresse container-paiement">
		<div class="inner-adresse">
			<form action="#" method="POST">
				<div class="element first">
					<label>Numéro de carte : </label>
					<input type="text" class="adresse num" placeholder="Veuillez indiquer votre numéro de carte">
				</div>
				<div class="element second">
					<label>CPP : </label>
					<a href="#" class="cpp">
						<img src="images/logos/cross.png" alt="interrog" class="interrog">
					</a>
					<div class="info"><p>Les numéros CPP sont les 3 numéros au verso de votre carte bancaire</p></div>
					<input type="text" class="adresse cpp-logo" placeholder="Veuillez indiquer le CPP">
					
				</div>
				<div class="element third">
					<label>Date D'expiration </label>
					<input type="month" class="adresse date" placeholder="Veuillez indiquer la date d'expiration :">	
				</div>
				
				<div class="element sentence">
					<small class="small">Toutes nos commandes sont livrées à domicile </small>
				</div>
				<div class="element okay">
					<button class="confirmer" type="submit">Continuer</button>
				</div>
			</form>
		</div>
	</div>	
	<?php include('parts/footer.php') ?>
	
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>
