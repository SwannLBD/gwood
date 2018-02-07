<?php

	require 'connectToDatabase.php';

	$queryAjout1 = "UPDATE `instrument` SET `imgInstr` = 'images/externeSwann/3810120821_frt_wlg_001.png' WHERE `instrument`.`idInstr` = 1";

		$nbModif = $connexion-> exec($queryAjout1);
	
		echo "<p> Le nombre de modifications est de $nbModif </p>";

	

?>