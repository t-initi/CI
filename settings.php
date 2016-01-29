<!DOCTYPE  html>
<html>
	<head>
		<title>Mon Site</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
		<?php
			include("./function.inc.php");
		?>
		<script type='text/javascript' src='./js/jscript.js'> </script>
		
	</head>
	
	
	<body>
		<div id='main_image'>
		<!--img src="./css/images/logo.jpg"-->
	</div>
	
	<header id="mainHeader"> 
		<h1>www.TheWinnersTeam.com</h1>
	</header>

	<nav id="navList">
			<?php
				//List Menu
				//menu_list();
			?>
	</nav>
		
		
	<section id='main_section'>
	<p id='page_option'><a href="#">Sign Up</a> | <a href="#">Sign In</a> | <a href="test.php">Test</a></p>
	
	<header id="head1">Gestion du Club</header>			
		

	<!-- Section de paramétrage du club selon utilisateur connecté -->
	<p id='button_settings'><button id="inscResp"> Inscrire un responsable</button> | <button id='inscEnf' >Inscrire un enfant</button> | <button>Gérer un groupe</button></p>

	<section id="club_settings">
		<form  style='display:none;' id="enfantForm" action='form_validator.inc.php' method='get'>
		<fieldset>
			<table>
			<tr><th>Identifiant Responsable : </th><td><input type='text' id='id_resp' name='id_resp' /></td></tr>
			<tr><th>Nombre d'enfant : </th><td><input type='number' id='nb_enf' name='nb_enf' min='0' max='20'/></td></tr>
			</table>
		</fieldset>
		<fieldset id='addenf'>
		</fieldset>

		<p><input type='submit' id='enregistrer_enfant' name='enregistrer_enfant' value='VALIDER' /></p>
		</form>
		
	</section>
	<!-- Fin de la Section de paramétrage du club selon utilisateur connecté -->
	
	<div id='query_res'></div>
	</section>
		
	<footer>Contacts</footer>
	</body>


</html>