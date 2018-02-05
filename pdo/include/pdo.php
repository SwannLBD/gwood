<?php
$hostname = "localhost";
$dbname = "gwood";
$username = "root";
$userpass = "root";

$connexionStr = "mysql:host=$hostname;dbname=$dbname;charset=utf8";

try{
//params : chaine de caractère, idf, mdp
$connexion = new PDO($connexionStr, $username, $userpass);
// s'il y a une problème, il est géré sous forme d'exception
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//fonctionnent en UTF8
$connexion->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
//recupération automatique sous forme d'objet
$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch(Exception $e) {
	echo 'erreur n° '. $e->getCode(). ' : '. $e->getMessage(). '</p>';
	echo 'Dans '. $e->getFile().' ('.$e->getLine().')</p>';
	echo"<pre>";
	var_dump($e->getTrace());
	echo"</pre>";
}
