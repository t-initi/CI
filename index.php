<?php session_start(); ?>
<!DOCTYPE  html>
<html>
	<head>
		<title>Histoire des Krou</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="./css/stylesheet.css"/>
		<?php
			require_once("./function.inc.php");
			require_once('connectdb.inc.php');
			include('html_generate.inc.php');
		?>
		
		<script type="text/javascript" src="js/jscript.js"></script>
		<script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/init.js"></script>
	</head>

	<body>
	<div id='main_image'>
		<!--img src="./css/images/logo.jpg"-->
	</div>

	<header id="mainHeader">
		<h1>Histoire des Krou</h1>
	</header>
	<nav id="navList">
			<?php
				//Affichage du menu
				//menu_list();
			?>
	</nav>
		
		
	<section id='main_section'>

	<p id='page_option'>
	<?php
	/*if(!isset($_SESSION['uid'])){
	echo "<span id='signUpBt' onclick='generateSignUpForm()'>Sign Up</span> | <span id='signInBt' onclick='generateSignInForm()'>Sign In</span>";
	}else{
		echo "<span style='color:green;'>Connecté </span> | <span><a style='color:orange;' href='logout.php'>Sign out</a></span>";
	}*/
	?>
	</p>
		
		
		<div style="display:none;"  id='connect_forms'>


		</div>
		


		<div id="navChapter"> 
			<button  class='prevChapt' onclick="prevchapter();">Chapitre Précédant</button>
					<header id='titre'> <h1>Histoire Occultée des Neeyouos</h1></header> 
			<button class="nextChapt" onclick="nextchapter();">Chapitre Suivant</button> 
		</div>

			
			<div style="display: none;" id="reader"><!-- Debut de reader div -->
			<div id="intro_img" >
				<img src="./css/images/ci.jpg" alt="main_img" >
			</div>
				<section><header class='chapitre'> <h2>Introduction </h2></header>


					<p>
					Pour comprendre ce qui se passe aujourd’hui en Côte d‘ivoire. Il faudra connaître ce qui c’était passé dans le golfe de Guinée à l’époque des grandes découvertes et connaître la disposition des groupes qui occupent ce littorale. 
					</p>

					<p>
					Je suis né (nee-you) dans l‘actuel (Bas-Sassandra). Le passé et le vécu de ce groupe n’apparaît pas dans l’histoire de la (république de CIV)  sinon brièvement, pourtant ils sont les premiers occupants de ce qui allait devenir une république est-ce, un oubli ou une volonté manifeste d’ignorer l’histoire de ce groupe. J‘ai voulu comprendre. Et informé tout ceux désireux de connaître l’histoire de la CIV. Surtout, informer la génération à venir sur le vrai passé de la République de côte d’ivoire dont l’histoire est lié à celle des neeyous, qui sont les premiers occupants de la côte ivoirienne. .Du sud-est actuel (Jacqueville) jusque dans l’actuel état du Liberia en passant par harper aussi bien (Grd -Sass) comme Sassandra Bérébi et tabou) cette côte a toujours été occuper par les (enfants de l’eau) qui signifie (nee-you) dans la langue qui liait ces villages côtiers entre eux. C’est ce groupe qui est à l‘origine de la navigation dite Kroumane, ce qui fera d‘eux les (krou maritime) que nous connaissons aujourd’hui en CIV. Ce livre apporte la lumière sur le passer de ce groupe qui les premiers en ci firent la connaissance des Navigateurs européens Mais aussi sur l‘histoire de la République de Côte d‘Ivoire. S’il, existe des africains capable d’apporter, un témoignage sur la traite dite atlantique, dans, tous ses détails, .C ‘est bien ce groupe, De (1435 jusqu’à l’arrivée des Français, après la défaite de (guillaume 2) et la dernière conférence de (Berlin), des alliés franco-anglais(1893). Dont on nous parle pas assez, pour nous abreuver de celle initiée par le chancelier du (Reich) feux (Otto van Bismarck) « 1885 »ce qui laisse, voir les bourreaux d’hier devenirs les enseignants de la morale ils sont alors libre d’écrire l’histoire à leurs convenance. Ce qui est une aberration et une tromperie intellectuelle, c’est une manière d‘esclavage moderne, en un mot l‘esclavage. Ce jeux de conférences, des pays colonialistes montre bien la cupidité dont est capable certains peuples!, je ne vous parle pas des droits de l’homme. Car l’histoire de ce groupe explique bien la pensée machiavélique de la France Dans sa volonté de profiter comme les grandes puissances européenne du continent Africain, allaient mettre en place l‘ancêtre de l‘ONU c’est-à-dire la « SDN« comprenez pourquoi ; La France s’est contenter d’occulter l’histoire de ce groupe. C’est bien hélas là toute la différence entre les vrais puissances européennes et la France ,Pendant que les premiers avaient abolis l’esclavage ,et débuter l’industrialisation ,dans certains de leurs comptoirs (fixe),la France découvrait ,la colonie autonome de côte d’ivoire ,comme je l’ais dis plus haut à partir de (1893).Dans la rédaction de leurs manuels scolaire ils ont oubliés de mentionner ce groupe ,rien dans ces livres (peuples noirs),Ne dis que cette bataille c’est aussi dérouler sur la cote ivoirienne principalement ,au large de la colonie autonome (San Andreas) le monuments des victimes Anglaise levé à cet effet existe encore dans cette ville on peut comprendre cet oubli de la part des Français pour la simple raison qu‘ils avaient déjà écrits ses livres avant d‘ajouter la cote d‘ivoire à leurs colonies « AOF« ,c’est la raison pour laquelle l’Europe m’attirait puisque le passé fait l’histoire, en tant que neeyou j’étais détenteur d’une partie de cette histoire il m‘était facile d‘orienter mes recherches ce qui n‘est pas le cas de ceux qui ,allaient plus tard enseigner l’histoire de ce pays je savais que ,l’autre partie était en Europe pendant que d’autre devenaient professeur d’histoire sans sortir de la CIV ou s’ils sortaient c‘était pour étudier l‘histoire de France. Je ne condamne pas ses étudiants,  si un peu, qui malheureusement sont devenus les victimes d’un système. Un peux parce que je vois une faciliter de la part de ses intellectuels ivoiriens qui étaient bien fière de leurs statuts, d’enseignants sinon comment peut-on enseigner quelque chose qu’on ignore, surtout l’histoire de son pays, quels genres de citoyens compte-on former avec ce qu’il est vrai d’appeler mensonge. N’oublions pas le coté victime de ses cadres mais ayons aussi ce courage de comprendre que le mérite vaut mieux que le conformisme qui nous ramène à la dépendance et je peux encore cité ,les conséquences de cette politique française qui n’avait rien avoir avec ses prédécesseurs sur ce continent! Mais c’est aussi là toute la différence entre la France et les vrai puissances européennes que sont (Latins, Anglo-saxon)  
					</p>
				</section>
					
					

			</div><!-- Fin de reader div -->
			<div id="chaptNum" style="border: 1px blue solid; visibility: hidden;">0</div>
			<div id="content"></div>
	</section>
	<footer>Contacts</footer>
	</body>


</html>