<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>phpsettings</title>
</head>

<body>
	<?php
	
	// On récupère les POST pour en faire des variables
	
	$nomUser = $_POST['lastname'];
	$prenomUser = $_POST['firstname'];
	$pseudoUser = $_POST['pseudo'];
	$mailUser = $_POST['mail'];
	$mdpUser = $_POST['mdp'];
	$dateUser = $_POST['date'];
	$avatarUser = $_POST['skins'];
	
	// connection au serveur 
	
	$link = mysqli_connect("localhost", "root", "root", "gwood");

if (!$link) { // Si le lien entre la connexion et la base de donnée, un affichage des erreurs apparait 
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/* echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
echo"</p>";*/
	
$sql = "INSERT INTO User (nomUser, prenomUser, pseudoUser, mailUser, mdpUser) 
VALUES ('" .$nomUser ."', '" .$prenomUser ."', '" .$pseudoUser ."', '" .$mailUser ."', '" .$mdpUser ."')"; /* On lie la base de donnée avec les variables pour récupérer les valeurs et ainsi créer la base de donnée */
	
/*echo ('Query SQL = ' . $sql2);*/ 
	
if (mysqli_query($link, $sql)) {
	 header ('Location: home.php'); // Si l'inscription à bien été faite, on redirige vers la page commencerformulaire
}else {
	echo "Error: " . $sql2 . "<br>" . mysqli_error($link); // Si il y a des erreurs, la page affiche un message d'erreur 
	// A compléter pour afficher si il y a des oublis ou des erreurs
}
	
	?>
</body>
</html>