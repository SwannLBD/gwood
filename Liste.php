<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Liste guitare</title>

	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

	<?php include('parts/header.php') ?>



	<?php

	require('connectToDatabase.php');




//Accoustique 1 DANS LA TABLE INSTRUMENT
	$query = "SELECT * FROM instrument WHERE refInstr='A01'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($acou1 = $stmt -> fetch()) {

//Accoustique 2 DANS LA TABLE INSTRUMENT
		$query = "SELECT * FROM instrument WHERE refInstr='A02'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($acou2 = $stmt -> fetch()) {

//Electrique 1 DANS LA TABLE INSTRUMENT
		$query = "SELECT * FROM instrument WHERE refInstr='E01'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($elec1 = $stmt -> fetch()) {

//Electrique 2 DANS LA TABLE INSTRUMENT
		$query = "SELECT * FROM instrument WHERE refInstr='E02'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($elec2 = $stmt -> fetch()) {

//Basse 1 DANS LA TABLE INSTRUMENT
		$query = "SELECT * FROM instrument WHERE refInstr='B01'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($basse1 = $stmt -> fetch()) {

//Basse 2 DANS LA TABLE INSTRUMENT
		$query = "SELECT * FROM instrument WHERE refInstr='B02'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($basse2 = $stmt -> fetch()) {

	?>


	<div class="list-container">
		<div class="list-inner">
			<div class="row">
				<div class="choix choix-1 col-5 offset-1">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $acou1 -> imgInstr ?> alt="Guitare accoustique 1">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $acou1 -> typeInstr ?> 1</h3>
							<p>Référence : <?php echo $acou1 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR($acou1 -> prixInstr ,0,3) ?> €</p>
						</div>
					</div>
				</div>
				<div class="choix choix-2 col-5">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $acou2 -> imgInstr ?> alt="Guitare accoustique 2">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $acou2 -> typeInstr ?> 2</h3>
							<p>Référence : <?php echo $acou2 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR($acou2 -> prixInstr ,0,3)?> €</p>
						</div>
					</div>
				</div>
				<div class="choix choix-1 col-5 offset-1">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $elec1 -> imgInstr ?> alt="Guitare accoustique 1">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $elec1 -> typeInstr ?> 1</h3>
							<p>Référence : <?php echo $elec1 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR($elec1 -> prixInstr ,0,3) ?> €</p>
						</div>
					</div>
				</div>
				<div class="choix choix-2 col-5">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $elec2 -> imgInstr ?> alt="Guitare accoustique 1">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $elec2 -> typeInstr ?> 2</h3>
							<p>Référence : <?php echo $elec2 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR ($elec2 -> prixInstr ,0,3) ?>€</p>
						</div>
					</div>
				</div>
				<div class="choix choix-1 col-5 offset-1">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $basse1 -> imgInstr ?> alt="Guitare accoustique 1">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $basse1 -> typeInstr ?> 1</h3>
							<p>Référence : <?php echo $basse1 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR($basse1 -> prixInstr ,0,3) ?> €</p>
						</div>
					</div>
				</div>
				<div class="choix choix-2 col-5">
					<div class="image-choix">
						<a href="#">
							<img src= <?php echo $basse2 -> imgInstr ?> alt="Guitare accoustique 1">
						</a>
					</div>
					<div class="text">
						<a href="#">
							<h3><?php echo $basse2 -> typeInstr ?> 2</h3>
							<p>Référence : <?php echo $basse2 -> refInstr ?></p>
						</a>
						<div class="prix prix-1">
							<p><?php echo SUBSTR($basse2 -> prixInstr ,0,3) ?> €</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		}

		}

		}

		}

		}

		}

	include('parts/footer.php')

	?>

	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
