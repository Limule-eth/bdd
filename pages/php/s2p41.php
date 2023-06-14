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

	<h1>- Recherche dans un tableau : array_key_exists in_array array_search -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 4</h2><br><br>

		<h3>array_key_exists</h3>
			<img src="../../images/s2p48.jpg"><br><br>

		<!-- Permet de savoir si une clé existe dans un tableau, envois la réponse avec un booléens -->

		<?php
		$recipe = [
		    'title' => 'Salade Romaine',
		    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
		    'author' => 'laurene.castor@exemple.com',
		];

			if (array_key_exists('title', $recipe))
			{
			    echo 'La clé "title" se trouve dans la recette !';}

			if (array_key_exists('commentaires', $recipe))
			{
			    echo 'La clé "commentaires" se trouve dans la recette !';} ?>		


		<h3>in_array</h3>
			<img src="../../images/s2p49.jpg"><br><br>

		<!-- Le principe est la même que array_key_exixts mais pour chercher une valeur -->

		<?php
		$users = [
		    'Mathieu Nebra',
		    'Mickaël Andrieu',
		    'Laurène Castor',
		];

			if (in_array('Mathieu Nebra', $users))
			{
			    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
			}

			if (in_array('Arlette Chabot', $users))
			{
			    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
			} ?>	


		<h3>array_search</h3>
			<img src="../../images/s2p410.jpg"><br><br>	

		<!-- array_search renvoi la clé d'une valeur d'un tableau -->

		<?php
		$users = [
		    'Mathieu Nebra',
		    'Mickaël Andrieu',
		    'Laurène Castor',
		];

			$positionMathieu = array_search('Mathieu Nebra', $users);
				echo '"Mathieu" se trouve en position ' . $positionMathieu . '<br>';

			$positionLaurène = array_search('Laurène Castor', $users);
				echo '"Laurène" se trouve en position ' . $positionLaurène; ?>


		

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>