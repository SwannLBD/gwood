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
					<!--<form method="post" action="signinphp.php">
						<label for="nomUser">Rentrer votre nom : </label>
						<input type="text" name="nomUser"><br/>
						<label for="prenomUser">Rentrer votre prénom : </label>
						<input type="text" name="prenomUser"><br/>
						<label for="pseudoUser">Rentrer votre pseudo : </label>
						<input type="text" name="pseudoUser"><br/>
						<label for="mailUser">Rentrer votre email : </label>
						<input type="text" name="mailUser"><br/>
						<label for="mdpUser">Tapper mot de passe : </label>
						<input type="password" name="mdpUser"><br/>
						<label for="repeatpassword">Retapper votre mot de passe :</label>
						<input type="password" name="repeatmdpUser"><br/>
						<input type="submit" name="valider" value="inscription" class="submit_inscritpion">
				</form>
				<div class="button_form">
				</div>-->

				<form class="form-style-4" action="signinphp.php" method="post">
						<label for="nomUser">
								<span>Rentrer votre nom :</span><input type="text" name="nomUser" required="true" />
						</label>
						<label for="prenomUser">
								<span>Rentrer votre prénom : </span><input type="text" name="prenomUser" required="true" />
						</label>
						<label for="pseudoUser">
								<span>Rentrer votre pseudo : </span><input type="text" name="pseudoUser" required="true" />
						</label>
						<label for="mailUser">
								<span>Rentrer votre email : </span><input type="text" name="mailUser" required="true" />
						</label>
						<label for="mdpUser">
								<span>Tapper mot de passe : </span><input type="password" name="mdpUser" required="true" />
						</label>
						<label for="repeatmdpUser">
								<span>Retapper votre mot de passe : </span><input type="password" name="repeatmdpUser" required="true" />
						</label>
						<label>
								<span>&nbsp;</span><input type="submit" value="inscription" name="valider" class="submit_inscritpion" />
						</label>
				</form>






			</div>
		</div>



	<?php include 'parts/footer.php' ?>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
<body>
</body>
</html>
