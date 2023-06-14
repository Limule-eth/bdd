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