<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>settings</title>

	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
	<?php include 'parts/header.php' ?>
		<div class="block_center2">
			<div class="container">
				<h1>Inscription</h1><hr>
					<form method="post" action="signinphp.php">
						<label for="nomUser">Rentrer votre nom : </label>
						<input type="text" name="nomUser"><br/>
						<label for="prenomUser">Rentrer votre prénom : </label>
						<input type="text" name="prenomUser"><br/>
						<label for="pseudoUser">Rentrer votre pseudo : </label>
						<input type="text" name="pseudoUser"><br/>
						<label for="mailUser">Rentrer votre email : </label>
						<input type="text" name="mailUser"><br/>
						<label for="mdpUser">Taper mot de passe : </label>
						<input type="password" name="mdpUser"><br/>
						<label for="repeatpassword">Retaper votre mot de passe :</label>
						<input type="password" name="repeatmdpUser"><br/>
						<input type="submit" name="valider" value="inscription" class="submit_inscritpion">
				</form>
				<div class="button_form">
				</div>	
					
					
					
					
				
	

				
			</div>
		</div>



	<?php include 'parts/footer.php' ?>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
<body>
</body>
</html>
