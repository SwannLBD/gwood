<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paiement</title>
	
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
	
	<?php include('parts/header.php') ?>
	<div class="container-paye">
		<div class="inner-paye">
			<form action="#" method="POST">
				<div class="element first">
					<label>Numéro de carte : </label>
					<input type="text" class="num" placeholder="Veuillez indiquer votre numéro de carte">
				</div>
				<div class="element second">
					<label>Date d'expiration : </label>
					<input type="month" min="2018-01" max="2050-12" class="expiration">
				</div>
				<div class="element third">
					<label>CPP : </label>
					<input type="text" class="adresse" placeholder="Veuillez indiquer votre CPP">
				</div>
				<div class="security">
					<img src="images/payment-security.png" alt="payment-security">
				</div>
				<div class="element okay">
					<button class="confirmer" type="submit">Finaliser</button>
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