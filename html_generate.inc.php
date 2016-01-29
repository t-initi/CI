
	<?php
	
	//Menu List
	function menu_list(){

		$list = "<ul id='li_menu'>
				<li><a href='index.php'>Accueil</a></li>
				<li><a href='#'>Santé</a></li>
				<li><a href='#'>Sport</a></li>
				<li><a href='#'>Galerie</a></li>
				<li><a href='account.php'>Mon Compte</a></li>

			</ul>";

			echo $list;
	}

	//Function genreating Form to Sign Up

	function signup_form(){

		$form = "
		<form id='userForm' action='#' method='get'>
			<table>
			<tr><td>Pseudo : </td> <td><input type='text' name='usr_pseudo'/></td></tr>
			<tr><td>Mot de passe : </td><td><input type='password' name='usr_mdp'/></td></tr>
			<tr><td>Email : </td><td><input type='text' name='usr_email'/></td></tr>
			</table>
			<input type='submit' value='Valider' name='valid_signup'/>
		</form>
		";

		echo $form;
	}


	/*Fuction genreating Form to sign In*/

		function signin_form(){

		$form = "
		<form action='#' method='get'>
			<table border='1'>
			<tr><td>Pseudo : </td> <td><input type='text' name='log_pseudo'/></td></tr>
			<tr><td>Mot de passe : </td><td><input type='password' name='log_mdp'/></td></tr>
			</table>
			<input type='submit' value='Valider' name='valid_signin'/>
		</form>
		";

		echo $form;
	}
	?>