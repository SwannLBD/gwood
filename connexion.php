<?php


session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gwood', 'root', 'root');
}
catch (Exception $e) // Si erreur
{
        die('Erreur : ' . $e->getMessage());
}


//Je choisis le champ login
$reponse_login = $bdd->query('SELECT mailUser FROM User'); // Je choisis de la base de donné login le champ login
$reponse_password = $bdd->query('SELECT mdpUser FROM User    '); // Je choisis de la base de donné login le champ password

//Je vérifie tout mes champs logins
while ($donnees = $reponse_login->fetch() AND $donees2 = $reponse_password->fetch()) // EDIT : Il n'y a plus d'erreur mais c'est à la ligne 20 maintenant
{
    if ($_POST['mailUser'] == $donnees['mailUser'] AND $_POST['mdpUser'] == $donees2['mdpUser']) // ERREUR ICI
    {
        // La suite de mon code qui y sera après que je n'ai plus d'erreur et pour l'instant c'est :
        header('location: home.php');
    }else{
		/* echo"Votre mot de passe ou votre mail est incorrect, veuillez réessayer"; */
    ('location: home.php?error_login=1');
	}
}
$reponse_login->closeCursor(); // Termine le traitement de la requête
$reponse_password->closeCursor(); // Termine le traitement de la requête

?>
