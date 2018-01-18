<?php
	
	//Connexion de l'utilisateur ------------------------------------------------
	
	
	/*print_r($_POST);*/   //Afficher le contenu d'un tableau php

	session_start();	//Création d'une session 

	$base_donnee 	= mysqli_connect('localhost' , 'root' , 'root' , 'gwood' )
			or die ('could not connect to database');  // Accès a la base de donnée sinon afficher l'echec de connexion 
	
	if(isset($_POST['mailUser']) && isset($_POST['mdpUser'])) // Si le mail et le mot de passe est complété 
	   {
	//connexion base de données 
	
	$inputmail 		= $_POST['mailUser']; // comparer le mail entrée au mail présent dans la base de donnée, suite a l'inscription  
	$inputpassword 	= $_POST['mdpUser']; // comparer le mot de passe entrée au mot de passe  présent dans la base de donnée, suite a l'inscription  
	$base_donnee 	= mysqli_connect('localhost' , 'root' , 'root' , 'gwood' )
			or die ('could not connect to database');
		   
		   
	$query = "SELECT idUser, nomUser, prenomUser, pseudoUser, mailUser, mdpUser FROM User"; //Selection de ID et des colonnes présente dans les tables

	if ($stmt = mysqli_prepare($base_donnee, $query)){ // Si la base de donnée reconnait nos ID et les colonnes 
		mysqli_stmt_execute($stmt); // Il s'éxécute 

		mysqli_stmt_bind_result($stmt,$id, $name, $prenom, $pseudo, $mail, $mdp); 

		echo('<div class"succes">'); // Afficher la div succes 

		while(mysqli_stmt_fetch($stmt)){  
			/*echo('<p>ID = ' . $id . ', name = ' . $name . ', prenom = ' . $prenom . ', mail = ' . $mail. ', mdp = ' . $mdp . '</p>');*/
			if ($inputmail == $mail && $inputpassword == $mdp) {  // Si le mail entrée est identique a celui de la base de donnée, et que si le mot de passe correspond aussi 
				header('Location: settings.php'); // Orienter vers la page commencerformulaire pour ainsi commencer le formulaire en étant conncté 
				exit; 
			} else {
				echo '<script>alert("Adresse email incorrect ou mot de passe incorrect");</script>'; // Si la connexion à echoué, afficher une alerte en haut de l'écran, prevenant qu'il y a une erreur 
			}
		}
	} else {
		echo('<p class="error">Error</p>');
	}

	mysqli_close($base_donnee);
		   
	   }
	?>