<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adresse</title>

	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('parts/header.php') ?>
	<div class="container-adresse">
		<div class="inner-adresse">
			<form action="#" method="POST">
				<label>Adresse : </label>
				<input type="text" class="adresse" placeholder="Veuillez entrer votre adresse">
				<label>Code Postale : </label>
				<input type="text" class="adresse" placeholder="Veuillez entrer votre code postale">
				<label>Ville : </label>
				<input type="text" class="adresse" placeholder="Veuillez entrer votre votre">
				<small class="info">Toutes nos commandes sont livrées à domicile </small>
				<button class="confirmer" type="submit">Continuer</button>
			</form>
		</div>
	</div>	
	<?php include('parts/footer.php') ?>
	
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>