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

	<h1>- Appeler une variables / Calculs -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 2 partie 1</h2>

			<h3> Appeler une variables </h3>
			<img src="../../images/s2p11.jpg"><br><br>


		Elle est formée d'un $ + "nom de la variable" espace = espace "valeur de la variable" ;	<br><br>
			<?php $name = 'Nico'?>
			<?php $userAge = 31;?>

		On peut afficher la valeur de la variable avec echo : <br>
		Il s'appel <?php echo $name;?> et il à <?php echo $userAge;?>ans.<br><br>

		On peut aussi utiliser la concaténation : <br>
		-avec guillement double :  <?php echo "Il s'appel $name et il à $userAge ans.";?><br><br>

		-avec guillemet simple (apostrophe) : <?php echo 'Il s\'appel ' . $name . ' et il à ' . $userAge . 'ans.';?><br><br>




			<h3> Calculs </h3>
			<img src="../../images/s2p12.jpg"><br><br>

		Faire des calculs entre les valeurs des variables grace à + - * / et ( modulo % )<br><br>

		<?php 
			$val1 = 10;
			$val2 = 2;
			$val3 = $val1 * $val2;
		?>

		<?php echo $val3;?><br>
		<?php echo $val3 / $val1;?><br>
		<?php echo ($val1 + $val2) / $val3;?>







			

	</section><br><br>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>