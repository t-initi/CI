<?php
	require('configdb.inc.php');

	function connect_moi($serveur,$utilisateur,$mdp,$bd){
		$co = new mysqli($serveur,$utilisateur,$mdp,$bd);
		if($co->connect_error){
			die("Erreur de connexion !" );
		}
		return $co;
	}
	$con = connect_moi(SERVER,USER,PASSWORD,DATABASE);
?>