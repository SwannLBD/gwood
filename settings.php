<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>settings</title>

	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swann.css">
	<link rel="stylesheet" href="css/etienne.css">

</head>

<body>
	<?php include 'parts/header.php' ?>
		<div class="block_center2">
			<div class="container">
				<form>
					<div class="form-group">
   						<label for="exampleInputName">Nom</label>
    					<input type="Name" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Votre adresse nom">
    					<small id="nameHelp" class="form-text text-muted">Modifier votre nom</small>
  					</div>
  					<div class="form-group">
   						<label for="exampleInputFirstname">Prénom</label>
    					<input type="firstname" class="form-control" id="exampleInputfirstname" aria-describedby="firstnameHelp" placeholder="Votre prénom">
    					<small id="firstnameHelp" class="form-text text-muted">Modifier votre prénom</small>
  					</div>
  					<div class="form-group">
   						<label for="exampleInputnickname">Pseudo</label>
    					<input type="nickname" class="form-control" id="exampleInputNickname" aria-describedby="nicknameHelp" placeholder="Votre pseudo">
    					<small id="nicknameHelp" class="form-text text-muted">Modifier votre pseudo</small>
  					</div>
 					<div class="form-group">
   						<label for="exampleInputEmail1">Email</label>
    					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse email">
    					<small id="emailHelp" class="form-text text-muted">Modifier votre adresse email</small>
  					</div>
  					<div class="form-group">
    					<label for="exampleInputPassword1">Mot de passe</label>
    					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Votre de mot de passe">
    					<small id="passwordHelp" class="form-text text-muted">Modifier votre mot de passe</small>
  					</div>	
  					<div class="button">
  						<button type="submit" class="btn btn-primary" href="#">Enregistrer les modifications</button>
  					</div>
				</form>
				<div class="button_form">
					
				</div>
			</div>
		</div>



	<?php include 'parts/footer.php' ?>
<body>
</body>
</html>