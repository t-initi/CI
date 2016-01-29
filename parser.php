<?php

	if(isset($_GET['nb_enf'])){
		$nbEnf = $_GET['nb_enf'];
		$tab="<table>";

		for($i=1;$i<=$nbEnf;$i++){
			$tab.="
			<tr '><th colspan='2' style='background:#A80000; text-align:center'>Enfant ".$i."</th></tr>
			<tr> <th>Nom : </th><td><input type='text' id='nom".$i."' name='nom".$i."' /></td></tr>
			<tr><th>Prénom: </th><td><input type='text' id='prenom".$i."' name='prenom".$i."' /></td></tr>
			<tr><th>Age : </th><td><input type='text' id='age".$i."' name='age".$i."' /></td></tr>";
		}

		$tab .="</table>";

		echo $tab;
	}



?>