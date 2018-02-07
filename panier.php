<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Panier</title>

	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

	<?php include('parts/header.php') ?>
	
	<div class="container-panier">
		<div class="inner-panier">
			<div class="scroll">
				<ul class="list-panier">
					<li>
						<img src="images/externeSwann/straight1.png" alt="choix 1">
						<div class="text">
							<h4>Nom de l'article 1 </h4>
							<h5>Référence : 4XDZ979P4579</h5>
						</div>
						<div class="right">
							<a href="#">
								<img src="images/logos/cross.png" alt="croix">
							</a>
							<div class="prix-article">
								<p>220€</p>
							</div>
						</div>
					</li>
				</ul>
			</div>	
			<div class="prix-total">
				<div class="prix-title">
					<p>Prix :</p>
				</div>
				<div class="affichage-prix">
					<p>250€</p>
				</div>
			</div>
			<div class="command-button">
				<a href="adresse.php" class="commander">
					<p>Commander</p>
				</a>
			</div>
		</div>
	</div>	
	
	<?php include('parts/footer.php') ?>
	

	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
