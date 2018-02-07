<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>detail_produit</title>
	
	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>

<body>
	<?php include('parts/header.php') ?>
	
	
	<?php

	require('connectToDatabase.php');




//Accoustique 1 DANS LA TABLE INSTRUMENT
	$query = "SELECT * FROM instrument WHERE refInstr='A02'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($acou2 = $stmt -> fetch()) { ?>
	
	
	<div class="container_detail">
		<div class="total_page">
			<div class="photo_ens">
				 <div class="photo">
					<img src= <?php echo $acou2 -> imgInstr ?> alt="">
				</div>
			</div>
			<div class="ref_prod">
				<h1> <?php echo $acou2 -> typeInstr ?>  </h1>
				<h2><?php echo $acou2 -> refInstr ?></h2>
			</div>
			<div class="desc_prod">
				<h1>Description</h1>
				<p><?php echo $acou2 -> descInstr ?></p>
			</div>
			<ul class="cara_prod">
				<li>Cordes en nylon</li>
				<li>Manche en acajou</li>
				<li>Plastique recyclé</li>
				<li>Garantie 2 ans</li>
			</ul>
			<img src="images/externeSwann/fabrication-francaise.png" alt="">
			<div class="ajouter">
				<p>185€</p>
				<img src="" alt="">
			</div>
			<div class="avis">
				<div class="choix_etoile">
					<h1>Laisser votre avis :</h1>
					<img src="images/star.png" alt="etoile">
					<img src="images/star.png" alt="etoile">
					<img src="images/star.png" alt="etoile">
					<img src="images/star.png" alt="etoile">
					<img src="images/star.png" alt="etoile">
				</div>
				<div class="avis_1">
					<h2>Julien</h2>
					<p>Produit de qualité à un prix abordable, je recommande !</p>
					<img src="images/star (1).png" alt="etoile">
					<img src="images/star (1).png" alt="etoile">
					<img src="images/star (1).png" alt="etoile">
					<img src="images/star.png" alt="etoile">
					<img src="images/star.png" alt="etoile">
				</div>
				<div class="avis_2">
					<h2>Charline</h2>
					<p>Le design bois est vraiment top !</p>
					<img src="images/etoilejaune.png" alt="etoile">
					<img src="images/etoilejaune.png" alt="etoile">
					<img src="images/etoilejaune.png" alt="etoile">
					<img src="images/etoilejaune.png" alt="etoile">
					<img src="images/etoilejaune.png" alt="etoile">
				</div>
			</div>
			
			
		</div>
	</div>
	
	<?php
	}
	include('parts/footer.php') ?>
	
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>