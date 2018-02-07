<?php

	require('pdo/include/pdo.php');


	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Accoustique', 'A01', 'Cordes en nylon', '195', 'A remplir', 'images/externeSwann/3810120821_frt_wlg_001.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";
	
	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Accoustique', 'A02', 'Cordes en nylon', '180', 'A remplir', 'images/externeSwann/guitar_PNG3363.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";

	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Basse', 'B01', '4 cordes en acier', '250', 'A remplir', 'images/externeSwann/6-2-bass-guitar-transparent.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";

	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Basse', 'B02', '4 cordes en acier', '240', 'A remplir', 'images/externeSwann/9a0bb37dda2751590b86abdbcf969ea9.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";

	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Electrique', 'E01', 'Cordes en acier', '210', 'A remplir', 'images/externeSwann/1475474.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";

	$queryAjout = "INSERT INTO instrument (typeInstr, refInstr, caractInstr, prixInstr, descInstr, imgInstr) VALUES('Electrique', 'E02', 'Cordes en acier', '225', 'A remplir', 'images/externeSwann/straight1.png')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";
?>