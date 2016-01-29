<?php 


//Function to connect to the database
function connect_to_db($serveur,$utilisateur,$mdp,$bd){
		$co = new mysqli($serveur,$utilisateur,$mdp,$bd);
		if($co->connect_error){
			die("Erreur de connexion !" );
		}
		return $co;
}

//Function for a direct connection to the database
function connect_me(){
	$serveur='localhost';
	$utilisateur='root';
	$mdp='';
	$bd='clubbd';
		$co = new mysqli($serveur,$utilisateur,$mdp,$bd);
		if($co->connect_error){
			die("Erreur de connexion !" );
		}
		return $co;
}

//Sign up Function
function userSignUp($usr_id, $usr_email,$usr_pseudo,$usr_pass,$user_type){
$co = connect_me();
$query = "INSERT INTO utilisateur(id_user,pseudo,mdp,email,type_user) VALUES ('".$usr_id."','".$usr_pseudo."','".$usr_pass."','".$usr_email."','".$user_type."')";
		if($res =$co->query($query)){
		echo $msg= "<p class='message'>L'enregistrement s'est bien passé. <a href='index.php'> Retour à l'accueil</a></p>";
		//header("Location: settings.php?query_res=".$msg."");
	}else{
		echo $msg= "<p class='message_error'>L'enregistrement s'est mal passé. <a href='index.php'> Retour à l'accueil</a></p>";
		//header("Location: settings.php?query_res=".$msg."");
	}
	
	$co->close();

}

//Sign In Function
function userSignIn($usr_pseudo,$usr_pass){
$co = connect_me();
$query = "SELECT id_user FROM utilisateur WHERE pseudo = '".$usr_pseudo."' AND  mdp='".$usr_pass."')";
		if($res =$co->query($query)){
		return $msg= "<p  class='message'>La connexion s'est bien passé. <a href='index.php'> Retour à l'accueil</a></p>";
		$tmp = $res->fetch_assoc();
		return $id = $res['id_user'];

		//header("Location: settings.php?query_res=".$msg."");
	}else{
		return $msg= "<p class='message_error'>L'enregistrement s'est mal passé. <a href='index.php'> Retour à l'accueil</a></p>";
		//header("Location: settings.php?query_res=".$msg."");
	}
}


//Function to register a child
function registerChild($id_resp,$nom,$prenom,$age){
$co = connect_me();
$query = "INSERT INTO enfant(id_enfant,id_responsable,nom,prenom,age) VALUES (NULL,'".$id_resp."','".$nom."','".$prenom."',".$age.")";
	if($res =$co->query($query)){
		$msg= "<p class='message'>L'enregistrement s'est bien passé. <a href='index.php'> Retour à l'accueil</a></p>";
		//header("Location: settings.php?query_res=".$msg."");
	}else{
		$msg= "<p class='message_error'>L'enregistrement s'est mal passé.<a href='index.php'> Retour à l'accueil</a></p>";
		//header("Location: settings.php?query_res=".$msg."");
	}
	$co->close();
}


function image_generator(){
	$dir ="./uploads/";
	$path = opendir($dir);
	$compteur = 0;
	while(($fileName = readdir($path)) != false){
		if($fileName != "." && $fileName != ".." ){
			$images[$compteur]= "<img style='border: 2px solid #800000; width: 250px; height:275px;' class='extraImage' src='".$dir.$fileName."' alt='".$fileName."'/>";
			$compteur++;
			}	
		}
		closedir($path);
	return $images[0];
	//echo $images[rand(0, $compteur -1)];
		}


//END
?>