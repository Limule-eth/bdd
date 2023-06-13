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

	<h1>-  Les boucles while for et les tableaux -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 3</h2><br><br>

		<img src="../../images/s2p31.jpg"><br><br>


	<!-- Grace au tableau on peut donner plusieurs valleurs à une même variable : -->

		<?php
			$user1 = ['Vincent Dugenou', 'vin.dugenou@gmail.com', 'p0iRo'];
			$user2 = ['Natalie Portman', 'nat.portman@gmail.com', 'k4RoT'];
			$user3 = ['Michael Bignoux', 'mic.bignoux@gmail.com', 'P13Re'];

			echo $user1[0]; // nom
			echo $user1[1]; // email
			echo $user1[2]; // mot de passe
		?>

	<!-- Les valeurs du tableau se mettent entre [] et sa première valeur est 0 pas 1 -->
																																					<br>
	<!-- On peut faire des tableaux de tableaux  -->

		<?php 
			$users = [$user1, $user2, $user3];

			echo $users[1][2];
		?>

	<h3>While</h3>
			<img src="../../images/s2p32.jpg"><br><br>

		<!-- La boucle se lit de haut en bas a l'infini jusqu'a ce que la condition devienne fausse! -->

		 	<?php $line = 1;
		 		while ($line <= 5) {
		 			echo "Reste motivé!<br>";
		 			$line++;                   
		 		} ?>
		 																																<br>
		<!-- $line++ signifie qu'on doit ajouter 1 à la valeur de $line a chaque tours de boucle,
			ainsi quand $line atteind 6 la condition ($line <= 5) deviens fausse et la boucle s'arrête! -->

		<!-- autre exemple -->

			<?php $line = 1;
				while ($line <=4) {
					echo "Ceci est la ligne n°$line <br>";
					$line++;
				} ?>
																															<br>

			<img src="../../images/s2p33.jpg"><br><br>

		<!-- while vas nous permettre d'aficher les élément d'un tableau comme ceci : -->																														
			<?php 
			$line = 3;
			$counter = 0;
				while ($counter < $line) {
					echo $users[$counter][0] . ' / ' . $users[$counter][1] . '<br>';
					$counter++;
				} ?>

		<!-- Au premier passage echo vas afficher $users[0][0] / $users [0][1]
			Dans notre cas le nom et le mail de $user1 puis ajouter 1 à la variable $counter.
			Après le 3eme passage, $counter seras à 3 et rendras fausse la condition ($counter < $line)
			ce qui arrêtera la boucle -->





		<h3>for</h3>
			<img src="../../images/s2p34.jpg"><br><br>

		<!-- On peut obtenir la même chose avec for, seul la mise en forme change,
			for est plus pertinant que while quand on sait d'avance combien de fois la boucle vas devoir se répeter.  -->

			<?php for ($line = 0; $line <= 2 ; $line++) { 
				echo $users[$line][0] . ' / ' . $users[$line][1] . '<br>';
			} ?>
<br>


	<h2>Exemple concret :</h2><br><br>
		<img src="../../images/s2p35.jpg"><br>

		<?php $recette = [
			['Casoulet','...','michael.andrieu@exemple.fr',true,],
			['Couscous','...','camille.dumont@exemple.fr', true],
			['Beuf bourgignon','...','michel.grand@exemple.fr', false], ]; ?>

		<ul>
			<?php for ($lines = 0; $lines <= 2 ; $lines++): ?>
				<li><?php echo $recette[$lines][0] . ' (' . $recette[$lines][2] . ')'; ?></li>
			<?php endfor; ?>
		</ul>
	

	















			

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>