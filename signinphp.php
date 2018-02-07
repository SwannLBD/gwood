<?php

	/*CONNEXION*/
require 'pdo/include/pdo.php';



//On initialise des erreurs
$errors = [];

/*CONDITIONS*/
//Si le nomUser est vide
if(empty($_POST['nomUser'])) {
    $errors['nomUser'] = "votre nom n'est pas valide (Alphanumérique)";
}

//Si le prenomUser est vide
if(empty($_POST['prenomUser'])) {
    $errors['prenomUser'] = "votre prénom n'est pas valide (Alphanumérique)";
}

//Si le pseudo est vide
if(empty($_POST['pseudoUser'])) {
    $errors['pseudoUser'] = "votre pseudo n'est pas valide (Alphanumérique)";
}

//Si l'adresse mail est vide
if(empty($_POST['mailUser'])) {
    $errors['mailUser'] = "Votre email n'est pas valide";
}
//Si le mot de passe est vide ou différent l'un l'autre
if(empty($_POST['mdpUser']) || $_POST['mdpUser'] != $_POST['repeatmdpUser']){
    $errors['mdpUser'] = "Vous devez rentrer un mot de passe valide";
}



//Si aucune erreur n'et detecté
if(empty($errors)){

	$stmt = $connexion->prepare('INSERT INTO User(nomUser, prenomUser, pseudoUser, mailUser, mdpUser)
	VALUES (:nomUser, :prenomUser, :pseudoUser, :mailUser, :mdpUser )');
	$stmt->bindValue(':nomUser', $_POST['nomUser']);
	$stmt->bindValue(':prenomUser', $_POST['prenomUser']);
	$stmt->bindValue(':pseudoUser', $_POST['pseudoUser']);
	$stmt->bindValue(':mailUser', $_POST['mailUser']);
	$stmt->bindValue(':mdpUser', $_POST['mdpUser']);
	$stmt->execute();

	header('Location: home.php');

}
//Si au moins une erreurs est detecté ont affiche les erreurs
else{

    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}


?>
