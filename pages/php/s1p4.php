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

	<h1>- Instruction echo / date et // commentaire php -</h1>

	<section class="bulle mar">
		<h2>Concevez votre site web avec PHP et MySQL | segment 1 partie 4</h2>

			<h3>L'instruction echo :</h3>
				<img src="../../images/s1p4.jpg"><br><br>

	<!-- On peut écrire une instruction echo avec ou sans parenthèses -->       
            <?php echo("On peut écrire une instruction echo avec"); ?>
            <?php echo "ou sans parenthèses!"; ?><br><br>

            <?php echo "Pour afficher des \"guillemet\" dans echo on place un back-slash devant.";?>


        <p>
            Cette ligne a été écrite entièrement en HTML.<br/>
            <?php echo "Celle-ci en php mais a l'intérieur d'une balise html P";?><br>
            On peut aussi demander à echo d'afficher une autre instruction comme date : 
            <?php echo date("d/m/Y h:i:s")?><br>
            On peut moduler la date comme on veux!<br><br>

            Les commentaire en php ont deux formes : <br>
            - les commentaires momoligne : // commentaire<br>
            - les commentaires multilignes : /* commentaire */
        </p>



			

	</section>

</main>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->
	

		
</body>
</html>