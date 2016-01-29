<!DOCTYPE  html>
<html>
	<head>
		<title>Mon Site</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
		<?php
		include_once('html_generate.inc.php');
		?>
	</head>

	<body>
	<div id='main_image'>
		<img src="./css/images/logo.jpg">
	</div>

	<header id="mainHeader">
		<h1>TheWinnersClub</h1>
		
	</header>
	<nav id="navList">
			<?php
				//List Menu
				menu_list();
			?>
	</nav>
		
	<section id='main_section'>
	<p id='page_option'><a href="user_connect.php">Sign Up</a> | <a href="user_connect.php">Sign In</a> | <a href="test.php">Test</a></p>
		<header id="head1">Connections</header>

		<div id='connect_forms'>


		<form id='signInForm' action='#' method='get'>
			<fieldset><legend>Sign In</legend>
			<table >
			<tr><th>Pseudo : </th> <td><input type='text' name='usr_pseudo' size='30'/></td></tr>
			<tr><th>Mot de passe : </th><td><input type='password' name='usr_mdp' size='30' /></td></tr>
			<tr ><td></td><td><input type='submit' value='Valider' name='valid_signup' size='30'/></td></tr>
			</table>
			</fieldset>
		</form>

		<form id='signUpForm' action='form_validator.inc.php' method='get'>
			<fieldset><legend>Sign Up</legend>
			<table >
			<tr><th>Id : </th> <td><input type='text' name='usr_id' id='usr_id' size='30'/></td></tr>
			<tr><th>Pseudo : </th> <td><input type='text' name='usr_pseudo' id='usr_pseudo' size='30'/></td></tr>
			<tr><th>Mot de passe : </th><td><input type='password' name='usr_mdp' id='usr_mdp' size='30' /></td></tr>
			<tr><th>Email : </th><td><input type='text' name='usr_email' name='usr_email' size='30'/></td></tr>
			<tr ><td></td><td><input type='submit' value='Valider' name='valid_signup' id='valid_signup' size='30'/></td></tr>
			</table>
			</fieldset>
		</form>
		</div>
				<div>
					
					
				</div>

				
		</div>



		</section>

	</section>
	<footer>Contacts</footer>
	</body>


</html>