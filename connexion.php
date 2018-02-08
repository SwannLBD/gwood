<?php


session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gwood', 'root', 'root');
}catch (Exception $e){ // Si erreur
    die('Erreur : ' . $e->getMessage());
}

$reponse_mail = $bdd->query('SELECT mailUser FROM User'); // Je cible le mailUser dans la table User
$reponse_password = $bdd->query('SELECT mdpUser FROM User    '); // Je cible le mdpUser dans la table User

//Je contrôle tous les champs
while ($donnees = $reponse_mail->fetch() AND $donees2 = $reponse_password->fetch()) { //Si tous les champs ont étés complétés ...

    if ($_POST['mailUser'] == $donnees['mailUser'] AND $_POST['mdpUser'] == $donees2['mdpUser']) { // Si le mdp et le mail sont identiques a la base de donnée...
        header('location: home.php'); // Je redirige vers la page homr.php
    }else{ // Sinon, si le mdp ou le mail est incorrect...
		    echo"Votre mot de passe ou votre mail est incorrect, veuillez réessayer <br>";
	}
}
$reponse_mail->closeCursor(); //Fin du traitement de la requête
$reponse_password->closeCursor(); //Fin du traitement de la requête


?>
