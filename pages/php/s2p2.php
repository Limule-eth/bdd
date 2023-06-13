<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Base de donnée</title>
	<meta name="description" content="Base de donnée">
	<link rel="stylesheet" type="text/css" href="../../css/bdd.css">
	<link rel="stylesheet" type="text/css" href="../../css/0css.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Bitter&family=Open+Sans&family=Overlock&family=Rubik+Marker+Hatch&display=swap" rel="stylesheet"> 
</head>

<body>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - MAIN =======-->


<main>

	<h1>- Les conditions if elseif else / switch case -</h1>

	<section class="bulle mar">
	<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 2</h2><br><br>

		Symbole à connaitre : <br>
		<ul>
			<li> == est égal à</li>
			<li> > est supérieur à</li>
			<li> < est inférieur à</li>
			<li> >= est supérieu ou égal à</li>
			<li> <= est inférieu ou égal à</li>
			<li> != est différent de</li><br>
			<li> && et</li>
			<li> || ou</li>
		</ul>

	<h2> If elseif else</h2><br>

		<h3>Les booléens</h3>
			<img src="../../images/s2p21.jpg"><br><br>


			<?php $isEnabled = true;		
				if ($isEnabled == true) {
					echo "Vous êtes autorisé à rentrer sur le site";
				}
				else {
					echo "Accès refusé";
				}?>																																				<br><br>



		<!-- Dans les conditions avec des booléens on n'est pas obligé de mettre == true, il est implicite!															
			On peut donc raccourcir la condition en :	 -->																											

			<?php $isEnabled = true;
				if ($isEnabled) {
				 	echo "Vous êtes autorisé à rentrer sur le site";
				 } 
				 else{
				 	echo "Accès refusé";
				 }
			?>																																					


		<!-- Et si on veux que if vérifie si la variable est == false on à juste à ajouter "! espace" avant.  -->											<br><br>

			<?php $isEnabled = true;
				if (! $isEnabled) {
				 	echo "Vous êtes autorisé à rentrer sur le site";
				 } 
				 else{
				 	echo "Accès refusé";
				 }
			?>																																					<br><br>





	<h4>Astuce :</h4><br><br>
		<img src="../../images/s2p23.jpg"><br><br>

	<!-- Ces deux codes ci-dessous donnent le même résultat  -->

		<?php $envoye = true;
			if ($envoye) {
				echo "<p>Message envoyé</p>";
			}?>


		<?php $envoye = true;?>
		<?php if ($envoye): ?>
			<p>Message envoyé</p>
		<?php endif;?>

	<!-- Il ne faut pas oublier :
			- pas d'occolades
			- les : après if()
			- finir avec endif;  -->																											
			




		<h3>Elseif</h3>	
			<img src="../../images/s2p22.jpg"><br><br>						

		<!-- Il est possible de mettre plusieurs vérification avec elseif  -->

			<?php $allowedToEnter = 24;
				if ($allowedToEnter == "oui") {
				 	echo "Tu est le bienvenu";
				 } 
				 elseif ($allowedToEnter == "non") {
				 	echo "Tu sens mauvais!";
				 }
				 else {
				 	echo "Veuillez répondre par oui ou par non";
				 }?>																																				<br><br><br>


	<h2> et ou || && </h2>	<br><br>
		<img src="../../images/s2p24.jpg"><br><br>																																	

		<!-- Avec && chaques conditions sitée doivent avoir la bonne valeur,
			alors qu'avec || seulement une de celle citées doit avoir la bonne valeur.  -->

			<?php
				$connected = true;
				$isOwner = false;
					if ($connected && $isOwner) {
					 	echo "Acces autorisé";
					 } 
					 else{
					 	echo "Acces interdit";
					 }
			?>																																				<br><br>

		<!-- On peut même mélangé les deux  -->

			<?php
			$connected = true;
			$isOwner = false;
			$admin = true;
				if (($connected && $isOwner) || $admin) {
				 	echo "Acces autorisé";
				 } 
				 else {
				 	echo "Acces interdit";
				 }
			?><br><br><br>





		<h2> switch case break </h2>	<br><br>

		<img src="../../images/s2p25.jpg">	<img src="../../images/s2p26.jpg"><br><br>

	<!-- Quand il y a un grand nombre de choix à examiner,
		 on peut utiliser switch / case.  -->

			<?php $note = 4;
				switch ($note)
				 {
				 	case 0:
				 		echo "Tu as eu 0/5";
				 		break;

				 	case 1:
				 		echo "Tu as eu 1/5";
				 		break;

				 	case 2:
				 		echo "Tu as eu 2/5";
				 		break;

				 	case 3:
				 		echo "Tu as eu 3/5";
				 		break;

				 	case 4:
				 		echo "Tu as eu 4/5";
				 		break;

				 	case 5:
				 		echo "Tu as eu 5/5";
				 		break;
				 	
				 	default:
				 		echo "entrez un chiffre entre 0 et 5";
				 } ?>																														<br><br>


	<!-- Mais ca fonctionne aussi avec if else évidement.  -->
			<?php $note = 2;
				if ($note == 0) {
					echo "Tu as eu 0/5";}

				elseif ($note == 1) {
					echo "Tu as eu 1/5";}

				elseif ($note == 2) {
					echo "Tu as eu 2/5";}

				elseif ($note == 3) {
					echo "Tu as eu 3/5";}

				elseif ($note == 4) {
					echo "Tu as eu 4/5";}

				elseif ($note == 5) {
					echo "Tu as eu 5/5";}

				else {
					echo "entrez un chiffre entre 0 et 5";} ?>

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>