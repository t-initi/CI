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
		<header id="head1">Message de Connexion</header>

		<div style="display:none;"  id='connect_forms'>
	</div>
		
	
	<div id='infos'>
		<?php

	require_once('./function.inc.php');

	/** Registering a child **/
	//We check if the submit botton enregistrer_enfant has been clicked
	if(isset($_GET['enregistrer_enfant'])){
	$resp =$_GET['id_resp'];
	$nbEnf = $_GET['nb_enf'];
		//We check that the user has inputed his id
		if(empty($resp)){
			echo "<p>bad value</p>";
			exit();
			
		}

	//We insert the data into a table one by one
		for($i=1;$i<=$nbEnf;$i++){
		$nom[$i]=$_GET["nom".$i.""];
		$prenom[$i]=$_GET["prenom".$i.""];
		$age[$i] =$_GET["age".$i.""];
		}

		for($i=1;$i<=count($nom);$i++){
			registerChild($resp,$nom[$i],$prenom[$i],$age[$i]);
		}
	}


	/*
	* Signing up a user
	*/
	if(isset($_GET['valid_signup'])){
	$usr_id= $_GET['usr_id'];
	$usr_email= $_GET['usr_email'];
	$usr_pseudo= $_GET['usr_pseudo'];
	$usr_pass= $_GET['usr_mdp'];
	$user_type= $_GET['type_user'];
	//Checking that the fields are not empty
		if(!empty($usr_id) && !empty($usr_email)  && !empty($usr_pseudo) &&  !empty($usr_pass)){
			userSignUp($usr_id, $usr_email,$usr_pseudo,$usr_pass,$user_type);
		}else{
			echo "<p class='message_error'>Veuillez remplir tous les champs. <a href='index.php'>Retour à l'accueil</a></p>";
		}
	}


	if(isset($_GET['valid_signin'])){
		$co = connect_me();
	$usr_pseudo= $_GET['acc_pseudo'];
	$usr_pass= $_GET['acc_mdp'];
		if(!empty($usr_pseudo) &&  !empty($usr_pass)){
			$query = "SELECT id_user FROM utilisateur WHERE pseudo = '".$usr_pseudo."' AND  mdp='".$usr_pass."'";
			if($res =$co->query($query)){
				$tmp = $res->fetch_assoc();
				$id = $tmp['id_user'];
				$_SESSION['uid'] = $id;
				header("Location: index.php");
			}else{
				echo "<p class='message_error'>Informations invalides. <a href='index.php'>Retour à l'accueil</a></p>";
			}
		}else{
			echo "<p class='message_error'>Veuillez remplir tous les champs. <a href='index.php'>Retour à l'accueil</a></p>";
		}
	}


					


?>
	

	</div>

	</section>
	<footer>Contacts</footer>
	</body>


</html>

