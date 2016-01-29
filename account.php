<?php session_start(); ?>
<!DOCTYPE  html>
<html>
	<head>
		<title>Mon Site</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
		<?php
			require_once("./function.inc.php");
			require_once('connectdb.inc.php');
			include('html_generate.inc.php');
		?>
		<script type="text/javascript" src='./js/jscript.js'></script>
		<script type="text/javascript">
			
				function generateSignUpForm(){
					if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
					}else{
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttp.onreadystatechange = function(){
						if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
							document.getElementById('connect_forms').style.display='inline-block';
							document.getElementById('connect_forms'). innerHTML = xmlhttp.responseText;
						}

					}
					xmlhttp.open('GET',"./files/signUpForm.html",true);
					xmlhttp.send();
				}
//
function generateSignInForm(){
					if(window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
					}else{
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttp.onreadystatechange = function(){
						if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
							document.getElementById('connect_forms').style.display='inline-block';
							document.getElementById('connect_forms'). innerHTML = xmlhttp.responseText;
						}

					}

					xmlhttp.open('GET',"./files/signInForm.html",true);
					xmlhttp.send();
				}
		</script>
	
	</head>

	<body>
	<div id='main_image'>
		<!--img src="./css/images/logo.jpg"-->
	</div>

	<header id="mainHeader">
		<h1>TheWinnersClub</h1>
	</header>
	<nav id="navList">
			<?php
				//Affichage du menu
				menu_list();
			?>
	</nav>
		
		
	<section id='main_section'>
	<p id='page_option'>
	<?php
	if(!isset($_SESSION['uid'])){
	echo "<span id='signUpBt' onclick='generateSignUpForm()'>Sign Up</span> | <span id='signInBt' onclick='generateSignInForm()'>Sign In</span>";
	}else{
		echo "<span style='color:green;'>Connecté </span> | <span><a style='color:orange;' href='logout.php'>Sign out</a></span>";
	}
	?>
	</p>
		<header id="head1">Account</header>
		<div id='user_profile' >

			<?php
			 echo image_generator();
			?>
		</div>
		<div id='userdetails'>
		<?php if(isset($_SESSION['uid'])){
			$id = $_SESSION['uid'];
			$co = connect_me();
			$query = "SELECT type_user FROM utilisateur WHERE id_user='".$id."'";
			$res = $co->query($query);
			$type = $res->fetch_assoc();
			$utype = $type['type_user'];
			$_SESSION['type_user'] = $utype;
		}

		?>
			<p><strong>Username:</strong></p>
			<p><strong>Nom:</strong></p>
			<p><strong>Prénom:</strong></p>
			<p><strong>Adresse:</strong></p>
			<p><strong>Catégorie:</strong></p>
			<p><strong>Nombre d'enfants:</strong></p>

		</div>
		
		<div style="display:none;"  id='connect_forms'></div>
	
	
	<div id='infos'>
					<form action="upload.php" method="post" enctype="multipart/form-data">
					    Select image to upload:
					    <input type="file" name="fileToUpload" id="fileToUpload">
					    <input type="submit" value="Upload Image" name="submit">
					</form>
	</div>

		<p id='button_settings'><button id="inscResp"> Inscrire un responsable</button> | <button id='inscEnf' >Inscrire un enfant</button> | <button>Gérer un groupe</button> | <button>Upload Image</button></p>

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

	</section>
	<footer>Contacts</footer>
	</body>


</html>