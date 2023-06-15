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

	<h1>- Les fonctions -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 5</h2><br><br>
			

	<h3>strlen</h3>

		<p>strlen compte le nombre de caractère (espace compris).</p>
			<img src="../../images/s2p5.jpg"><br><br>

		<?php 
			$recette = 'la pizza c\'est délicieu!!!';
			$nbr = strlen($recette);

			echo "La phrase ci dessus comporte $nbr caractères.";
		?>

	<h3>créer une fonction</h3>
		<img src="../../images/s2p51.jpg"><br><br>

	<?php $pizza = [
			[
				'titre' => 'Margarita',
				'recette' => 'tomate, mozza',
				'auteur' => 'André24',
				'allowed' => true,
			],
			[
				'titre' => 'Chèvre',
				'recette' => 'chèvre, miel, noix, olive',
				'auteur' => 'Martindu72',
				'allowed' => false,
			],
			[
				'titre' => 'Royale',
				'recette' => 'tomate, jambon, olive',
				'auteur' => 'PatrickLeBg',
				'allowed' => true,
			], ]; ?>


		<?php function isAllowed(array $reci) : string
			{
				if ($reci['allowed'] == true) {
					$test = 'oui';
				}

				else {$test = 'non';}

				return $test;

			} ?>

			<?php echo isAllowed($pizza[0]);?><br><br>

	<h4>Exemple concret</h4><br><br>
		<img src="../../images/s2p52.jpg"><br><br>

	<!-- Récupérer les recettes valides -->


	<?php foreach($pizza as $elem)
		if (isAllowed($elem) == 'oui') {
		 	echo $elem['titre'] . ' <br> ';
		 	echo $elem['recette'] . ' <br> ';
		 	echo $elem['auteur'] . ' <br><br> ';
		 } ?><br><br>


		<img src="../../images/s2p53.jpg"><br>

<!-- Relier l'e-mail associé à un compte utilisateur à l'e-mail utilisé pour la contribution d'une recette.
		 	  Boucler sur les recettes valides.
			  Prendre l'e-mail.
			  Boucler sur les utilisateurs de la plateforme.
			  Si les e-mails correspondent, prendre le nom.
			  Sinon, continuer à parcourir la liste des utilisateurs. -->

<?php

	$users = [
	    [
	        'full_name' => 'Mickaël Andrieu',
	        'email' => 'mickael.andrieu@exemple.com',
	        'age' => 34,
	    ],
	    [
	        'full_name' => 'Mathieu Nebra',
	        'email' => 'mathieu.nebra@exemple.com',
	        'age' => 34,
	    ],
	    [
	        'full_name' => 'Laurène Castor',
	        'email' => 'laurene.castor@exemple.com',
	        'age' => 28,
	    ], ];

	$recipes = [
	    [
	        'title' => 'Cassoulet',
	        'recipe' => '...',
	        'author' => 'mickael.andrieu@exemple.com',
	        'allowed' => true,
	    ],
	    [
	        'title' => 'Couscous',
	        'recipe' => '...',
	        'author' => 'mickael.andrieu@exemple.com',
	        'allowed' => false,
	    ],
	    [
	        'title' => 'Escalope milanaise',
	        'recipe' => '...',
	        'author' => 'mathieu.nebra@exemple.com',
	        'allowed' => true,
	    ],
	    [
	        'title' => 'Salade Romaine',
	        'recipe' => '...',
	        'author' => 'laurene.castor@exemple.com',
	        'allowed' => false,
	    ], ]; ?>



<?php  function auteurAge(string $emailAuteur, array $user) {
	for ($i=0; $i < count($user); $i++) { 
		$auteur = $user[$i];

		if ($emailAuteur === $auteur['email']) {
			return $auteur['full_name'] . ' (' . $auteur['age'] . ' ans)';
		} } } ?>




	    <?php foreach($recipes as $elem)
		if (isAllowed($elem) == 'oui') {
		 	echo $elem['title'] . ' <br> ';
		 	echo auteurAge($elem['author'], $users) . ' <br><br> ';
		 } ?><br><br>

<!-- ou -->




	

	





		














		<?php $pizza = [
			[
				'titre' => 'Margarita',
				'recette' => 'tomate, mozza',
				'auteur' => 'André24',
				'allowed' => true,
			],
			[
				'titre' => 'Chèvre',
				'recette' => 'chèvre, miel, noix, olive',
				'auteur' => 'Martindu72',
				'allowed' => false,
			],
			[
				'titre' => 'Royale',
				'recette' => 'tomate, jambon, olive',
				'auteur' => 'PatrickLeBg',
				'allowed' => true,
			], ]; ?>

			








	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>