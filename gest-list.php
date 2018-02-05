<?php

	require('connectToDatabase.php');

/*
//AJOUTER DANS LA TABLE INSTRUMENT
	$queryAjout = "INSERT INTO instrument(typeInstr, refInstr, caractInstr, prixInstr, descInstr) VALUES('Basse', 'B02', '4 cordes en acier', '240', 'Remplir description ')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>"; 
*/

//RECUPERER DANS LA TABLE INSTRUMENT
	$query = "SELECT * FROM instrument WHERE typeInstr=:type";
		$stmt = $connexion->prepare($query);
		$stmt -> bindValue(':type', 'Accoustique'); //bind = lier
		$stmt -> execute();

		while($instr = $stmt -> fetch()) {
			echo "<pre>";
			echo "<p>" . $instr -> refInstr . "</p>";
			echo "<p>" . $instr -> caractInstr . "</p>";
			echo "<p>" . $instr -> descInstr . "</p>";
			echo "<p>" . $instr -> prixInstr . "</p>";
			echo "</pre>";
		}




	

?>