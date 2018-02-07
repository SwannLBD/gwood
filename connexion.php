<?php

require 'pdo/include/pdo.php';

session_start();

$query = "SELECT * FROM User WHERE mailUser='$_POST[mailUser]' AND mdpUser='$_POST[mdpUser]'";
$stmt = $connexion->prepare($query);
$stmt -> execute();

$resultat = $stmt->fetch(PDO::FETCH_ASSOC);

if ($resultat)
{
    $_SESSION['idUser'] = $resultat['idUser'];
    $_SESSION['mailUser'] = $_POST['mailUser'];
    $_SESSION['mdpUser'] = $_POST['mdpUser'];

    var_dump($resultat);
}

//header('Location: home.php');

?>
