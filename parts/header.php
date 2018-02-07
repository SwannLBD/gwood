
<header class="block-header">
	<a href="home.php">
		<img src="images/logos/logo.png" alt="logo GWood" class="logo">
	</a>
	<nav class="nav">
		<a class="nav-link active" href="Liste.php">Instruments</a>
		<a class="nav-link" href="Personnalisation.php">Personnalisation</a>
		<a class="nav-link" href="G.photos.php">G.Photos</a>
		<a class="nav-link" href="">ProG Wood</a>
		<a class="nav-link" href="panier.php">Panier</a>
	</nav>

	<div class="form-connexion">
		<form action="connexion.php" method="POST">
			<input type="text" class="mail" placeholder="Email" name="mailUser">
			<input type="password" class="mdp" placeholder="Mot de passe" name="mdpUser">
			<button type="submit" class="btn-connect">Connexion </button>
			<a class="btn-connect-1" href="signin.php">S'inscrire !</a>
		</form>
<?php
		/* if (empty($_SESSION["mailUser"]) || empty($_SESSION['mdpUser'])) {
			echo "<script>alert('veuillez saisir une adresse mail et un mot de passe pour une meilleure navigation')</script>";
		}else {
			echo "<script>alert('Connexion valide, authentification réussite !')</script>";
		} */
?>
	</div>
<script>

</script>

</header>
