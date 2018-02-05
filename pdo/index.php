<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bdo</title>
</head>

<body>
<?php

	require 'include/pdo.php';

	try{
		/* $query = "SELECT * FROM alerte "; //on peut ajouter un WHERE pour etre plus precis
		$resultats = $connexion->query($query); */
		//echo"<pre>";
		//var_dump($resultats -> fetchAll());
		//echo"</pre>";


		// 1er moyen d'accèder aux resultats

		/*$tableauResultats = $resultats -> fetchAll();
			echo $tableauResultats[2]->messageAlerte;*/

		//2ème moyen
		/* while($alerteObj = $resultats->fetch()){
			echo"<pre>";
			echo $alerteObj->messageAlerte;
			echo"</pre>";
		}

		$resultats->closeCursor(); */

			//pour ajouter une ligne

			/* $queryAjout = "INSERT INTO responsable_pedagogique(idResponsable, nomResponsable, prenomResponsable) VALUES('10', 'Marchesseau', 'Johan')";
			$nbModif = $connexion->exec($queryAjout); */

			//pour modifier une ligne

			/* $queryModif = "UPDATE responsable_pedagogique SET nomResponsable =  'LAMBARD', prenomResponsable = 'Swann' WHERE idResponsable = 2";
			$nbModif = $connexion->exec($queryModif);
		echo "<p> Le nombre de modification est de $nbModif</p>"; */

			//pour supprimer une ligne

			/* $querySuppr = "DELETE FROM responsable_pedagogique WHERE idResponsable = 10";
			$nbModif = $connexion->exec($querySuppr);
		echo "<p> Le nombre de modification est de $nbModif</p>"; */

		/* $query = "SELECT * FROM alerte WHERE idAlerte=:id"; //on peut ajouter un WHERE pour etre plus precis
		$statement = $connexion->prepare($query);
		$statement->bindValue(':id',2);
		$statement->execute();

		while($alerteObj = $statement->fetch()) {
			echo "<pre>";
			echo "<p>".$alerteObj->messageAlerte. "</p>";
			echo "</pre>";
		}

		$statement->bindValue(':id', 6);
		$statement-> execute();
		while($alerteObj = $statement->fetch()){
			echo "<pre>";
			echo "<p>".$alerteObj->messageAlerte. "</p>";
			echo "</pre>";
		} */ 

		//pour ajouter une ligne
		/*$queryAjout = "INSERT INTO alerte(idAlerte, numeroAlerte, messageAlerte) VALUES(:id, '9', 'Facultatif 2')"; //on peut ajouter un WHERE pour etre plus precis
		$statementAjout = $connexion->prepare($queryAjout);
		//PDO:PARAM_STR permet de spécifier explicitement que le paramètre est une chaine de caractère
		$statementAjout->bindValue(':id', 9);
		$statementAjout->execute(); */


		//pour voire combien de ligne on été modifier, ajouter ou modifier
		/* if($statement->execute()) {
			echo "<p>le nombre de modification pour l'INSERT est de " .$statement->rowCount()."</p>";
		} */


		//pour modifier une ligne
		/*$queryModif = "UPDATE alerte SET messageAlerte = 'DOMMAGE, essai encore' WHERE idAlerte=:id"; //on peut ajouter un WHERE pour etre plus precis
		$statement = $connexion->prepare($query);
		$statement->bindValue(':id', 7);
		$statement->execute();*/

		//pour supprimer une ligne
		/*$querySuppr = "DELETE FROM alerte WHERE idAlerte =:id"; //on peut ajouter un WHERE pour etre plus precis
		$statementSuppr = $connexion->prepare($querySuppr);
		$statementSuppr->bindValue(':id', 8);
		$statementSuppr->execute(); */


	} catch(Exception $e){
		echo 'erreur n° '. $e->getCode(). ' : '. $e->getMessage(). '</p>';
		echo 'Dans '. $e->getFile().' ('.$e->getLine().')</p>';
		echo"<pre>";
		var_dump($e->getTrace());
		echo"</pre>";
	}
?>
</body>
</html>
