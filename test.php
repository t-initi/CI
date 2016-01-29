<?php

	echo "<form action='#' method='get'>
			<table border='1'>
			<tr><td>Email : </td><td><input type='text' name='usr_email' id='usr_email'/></td></tr>
			<tr><td>Pseudo : </td> <td><input type='text' name='usr_pseudo' id='usr_pseudo'/></td></tr>
			<tr><td>Mot de passe : </td><td><input type='password' name='usr_mdp' id='usr_mdp/></td></tr>
			<tr><td>Clicker pour valider</td>
			<td><input type='submit' value='Valider' name='valid_signup' id='valid_signup' onclick='javascript:ajax_post()'/></td>
			</tr>
			</table>
			
		</form>";
?>
<form action='#' method='get'>
			<table border='1'>
			<tr><td>Email : </td><td><input type='text' name='usr_email' id='usr_email'/></td></tr>
			<tr><td>Pseudo : </td> <td><input type='text' name='usr_pseudo' id='usr_pseudo'/></td></tr>
			<tr><td>Mot de passe : </td><td><input type='password' name='usr_mdp' id='usr_mdp'/></td></tr>	
			</table>
			<p>Clicker pour valider: <input type='submit' value='Valider' name='valid_signup' id='valid_signup' onclick='javascript:ajax_post()'/></p>
		</form>

		/*

				function ajax_post(){
				//Creation of an XMLHttpRequest Object
			var hr = new XMLHttpRequest();
			var usr_pseudo = document.getElementById('usr_pseudo').value;
			//var usr_mdp = document.getElementById('usr_mdp').value;
			var usr_email = document.getElementById('usr_email').value;
			//var url = 'form_validator.inc.php';
			var url = 'index.php';
			//var vars = "usr_pseudo="+usr_pseudo+"&usr_email="+usr_email;
			var vars = "usr_pseudo="+usr_pseudo+"&usr_email="+usr_email;

			hr.open('POST',url,true);
			//Set Request content-type header for url encoded
			//hr.setRequestHeader("Content-type","application/x-form-urlencoded");
			//Access to on ready state change
			hr.onreadystatechange = function () {
				if(hr.readyState==4 && hr.status==200){
					var toReturn = hr.responseText;
					document.getElementById("status").innerHTML =toReturn;
				}
			}

			hr.send(vars);
			document.getElementById("status").innerHTML ="Processing . . . . . .";
		}
		*/