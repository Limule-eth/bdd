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

	<h1>- Organiser les données dans un tableau / boucles for, foreach, print_r -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 4</h2><br><br>

			<p style="font-size: 1.3em;">On utilise généralement les tableaux numéroté pour les listes d'éléments de même type et les tableaux associatifs pour lister des informations différentes à propos d'un sujet.</p>

			<h3>Les tableaux numérotés</h3>
				<img src="../../images/s2p41.jpg">

	<!-- Le tableau est une variable pouvent contenir plusieurs valeurs.
		Voici un tableau classique :  -->

			<?php $pizza = ['Margarita','Chèvre','Royale','Peperoni',]; ?>


	<!-- Le tableau peut aussi se créé comme ceci : array voulant dire tableau en anglais-->

			<?php $pizza = array('Margarita','Chèvre','Royale','Peperoni'); ?>


	<!-- Ou encore comme ceci :  -->

			<?php 
				$pizza[0] = 'Margarita';
				$pizza[1] = 'Chèvre';
				$pizza[2] = 'Royale';
				$pizza[3] = 'Peperoni';
			?>

			<h3>Les tableaux associatifs</h3>
				<img src="../../images/s2p42.jpg"><br><br>

		<!-- Dans un tableau associatif, on peut remplacer les clé 0 1 2 par des mot clé comme ceci : -->

			<?php $chevre = [
				'titre' => 'Chèvre',
				'recette' => 'Etape 1 : faire la pate, Etape 2: ...',
				'auteur' => 'Nico',
				'connected' => true,
			]; ?>

			<?php echo $chevre['auteur'];?>


	<br><br><h2>Les boucles for, foreach et print_r</h2><br><br>

		<h3>for</h3>
			<img src="../../images/s2p43.jpg"><br><br>

	<!-- La boucle for est très simple pour parcourir des tableaux numérotés --> 	

	<?php 	$recipes = [
	    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
	    ['Couscous','[...]','mickael.andrieu@exemple.com',false,], ];

			for ($lines = 0; $lines <= 1; $lines++) {
			    echo $recipes[$lines][0]; } ?> 				

	<!-- Si $lines = 1 on cerce la valeur $recipes[1][0] c.a.d  Couscous -->


		<h3>foreach</h3>

		<p style="font-size: 1.3em"> Fonctionne aussi bien pour des tableaux numérotés qu'associatif. </p>
			<img src="../../images/s2p44.jpg"><br><br>
	

		<?php foreach ($recipes as $elem) {
			echo $elem[2];
		} ?>

	<!-- Vas afficher le 3eme élément de chaques ligne du tableau, donc : $recipes[0][2] puis $reciepes[1][2] etc -->           <br><br>

			<img src="../../images/s2p45.jpg"><br><br>


		<?php $chevre = [
				'titre' => 'Chèvre ',
				'recette' => 'Etape 1 : faire la pate, Etape 2: ... ',
				'auteur' => 'Nico',
				'connected' => true,
			]; 

			foreach ($chevre as $elems) {
				echo $elems;
			} ?>

	<!-- $elems vas prendre la valeur de chaques élément du tableau tour à tour et foreach vas s'arrêter une fois le tout parcourus --> 			<br><br>
			<img src="../../images/s2p46.jpg"><br><br>


		<?php

		$reci = [
		    [
		        'title' => 'Cassoulet',
		        'recipe' => '...',
		        'author' => 'mickael.andrieu@exemple.com',
		        'is_enabled' => true,
		    ],
		    [
		        'title' => 'Couscous',
		        'recipe' => '...',
		        'author' => 'mickael.andrieu@exemple.com',
		        'is_enabled' => false,
		    ],
		    [
		        'title' => 'Escalope milanaise',
		        'recipe' => '...',
		        'author' => 'mathieu.nebra@exemple.com',
		        'is_enabled' => true,
		    ],
		    [
		        'title' => 'Salade Romaine',
		        'recipe' => '...',
		        'author' => 'laurene.castor@exemple.com',
		        'is_enabled' => false,
		    ],
		];

		foreach($reci as $eleme) {
			echo $eleme['title'] . ' à été fait par : ' . $eleme['author'] . '<br>';
		} ?>


	<!-- foreach peut aussi nous permettre de sortir la "clé" des valeurs d'un tableau  -->													<br>

		<?php foreach ($reci[0] as $key => $value) {
			echo '[' . $key . '] vaut ' . $value . '<br>';
		} ?>

	<h3>print_r</h3>
		<img src="../../images/s2p47.jpg"><br>


	<!-- print_r est très pratique pour voir ce que contien un tableau  -->

	<?php 
		echo '<pre>';
		print_r($reci);
		echo '</pre>';
	?>

		

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>