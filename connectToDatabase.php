<?php

/******************Connexion à la base de données***********************/

	$hote = 'localhost'; //chemin vers le serveur
	$name = 'gwood'; //nom de la base de donnée
	$user = 'root'; //nom de l'user
	$mdp = ''; //mot de passe de l'user
	
	$connectionStr= 'mysql:host='.$hote.';dbname='.$name.';charset=utf8';
	try{
		$connexion = new PDO($connectionStr, $user, $mdp);
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connexion->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES \'UTF8\'');
		$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		/*echo' connecté  ';*/
	} 
	catch(Exception $e) {
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo'N°: '.$e->getCode();
	}
	

	

?>