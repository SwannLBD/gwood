<?php

require 'pdo/include/pdo.php';

session_start();

$query = "SELECT * FROM User WHERE mailUser='$_POST[mailUser]' AND mdpUser='$_POST[mdpUser]'";
$stmt = $connexion->prepare($query);
$stmt -> execute();

$resultat = $stmt->fetch();

if ($resultat)
{
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['mailUser'] = $_POST[mailUser];
    $_SESSION['mdpUser'] = $_POST[mdpUser];
}

header('Location: home.php');

/*
$_SESSION["mailUser"]=$_POST["mailUser"];
$_SESSION["mdpUser"]=$_POST["mdpUser"];

try { require 'pdo/include/pdo.php';
}
catch (Exception $e) {die("L'accès à la base de donnée est impossible.");
}

if (empty($_SESSION["mailUser"]) or empty($_SESSION['mdpUser'])) {
    echo "veuillez saisir une adresse mail et un mot de passe";
}
else {
  if ($_SESSION["mailUser"] == $_POST["mailUser"] && $_SESSION["mdpUser"] == $_POST["mdpUser"]) {  // Si le mail entrée est identique a celui de la base de donnée, et que si le mot de passe correspond aussi
      header('Location: G.photos.php'); // Orienter vers la page commencerformulaire pour ainsi commencer le formulaire en étant conncté
      exit;
    } else {
      echo '<script>alert("Adresse email incorrect ou mot de passe incorrect");</script>'; // Si la connexion à echoué, afficher une alerte en haut de l'écran, prevenant qu'il y a une erreur
    }


  /*  $st = $bdd->query("SELECT COUNT(*) FROM User WHERE login='".$_SESSION["mailUser"]."' AND password='".$_SESSION["mdpUser"]."'")->fetch();
    if ($st['COUNT(*)'] == 1)
        header("Location: www.google.com");*/
/*}


/* require 'pdo/include/pdo.php';

session_start();


//On initialise des erreurs
$errors = [];

//Si l'adresse mail est vide
if(empty($_POST['mailUser'])) {
    $errors['mailUser'] = "Votre email n'est pas valide";
}

//Si le mot de passe est vide ou différent l'un l'autre
if(empty($_POST['mdpUser'])){
    $errors['mdpUser'] = "Vous devez rentrer un mot de passe valide";
}

if(empty($errors)){

  //connexion base de données

  $inputmail 		= $_POST['mailUser']; // comparer le mail entrée au mail présent dans la base de donnée, suite a l'inscription
  $inputpassword 	= $_POST['mdpUser']; // comparer le mot de passe entrée au mot de passe  présent dans la base de donnée, suite a l'inscription
    require 'pdo/include/pdo.php';


  $query = "SELECT idUser, nomUser, prenomUser, pseudoUser, mailUser, mdpUser FROM User"; //Selection de ID et des colonnes présente dans les tables

  if ($stmt = mysqli_prepare($base_donnee, $query)){ // Si la base de donnée reconnait nos ID et les colonnes
    mysqli_stmt_execute($stmt); // Il s'éxécute

    mysqli_stmt_bind_result($stmt,$id, $name, $prenom, $mail, $mdp);

    echo('<div class"succes">'); // Afficher la div succes

    while(mysqli_stmt_fetch($stmt)){
      /*echo('<p>ID = ' . $id . ', name = ' . $name . ', prenom = ' . $prenom . ', mail = ' . $mail. ', mdp = ' . $mdp . '</p>');*/
    /*  if ($inputmail == $mail && $inputpassword == $mdp) {  // Si le mail entrée est identique a celui de la base de donnée, et que si le mot de passe correspond aussi
        header('Location: www.google.com'); // Orienter vers la page commencerformulaire pour ainsi commencer le formulaire en étant conncté
        exit;
      } else {
        echo '<script>alert("Adresse email incorrect ou mot de passe incorrect");</script>'; // Si la connexion à echoué, afficher une alerte en haut de l'écran, prevenant qu'il y a une erreur
      }
    }
  } else {
    echo('<p class="error">Error</p>');
  }

}

mysqli_close($base_donnee);
*/
?>
