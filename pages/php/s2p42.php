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

	<h1>- Cas pratrique -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 4</h2><br><br>
			<img src="../../images/s2p411.jpg"><br><br>


	<!-- Créer un tableau associatif
		Afficher les ARTICLES seulement si 'allowed' = true -->

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

	<div>
		<h4>Affichage pizza</h4>

		<?php foreach($pizza as $liste): ?>

			<?php if ($liste['allowed'] == true): ?>

				<article>
					<h3><?php echo $liste['titre']; ?></h3>
					<div><?php echo $liste['recette']; ?></div>
					<i><?php echo $liste['auteur']; ?></i>
				</article>

			<?php endif; ?>

		<?php endforeach ?>
	</div>











	</div>		

		


		

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>