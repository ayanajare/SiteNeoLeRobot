<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Projet POIN</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	<?php
		if (!isset($_GET['page'])) {
			header('Location: ./index.php?page=acceuil');
			exit();}
	?>

	<ul>
		<li><a href="./index.php?page=acceuil" <?php if ($_GET['page']=="acceuil") {echo 'class="selection"';}?>>Acceuil</a></li>
		<li><a href="./index.php?page=conception" <?php if ($_GET['page']=="conception") {echo 'class="selection"';}?>>Conception</a></li>
		<li><a href="./index.php?page=composition" <?php if ($_GET['page']=="composition") {echo 'class="selection"';}?>>Composition</a></li><li>
		<li><a href="./index.php?page=fonctionnement" <?php if ($_GET['page']=="fonctionnement") {echo 'class="selection"';}?>>Fonctionnement</a></li><li>
		<li><a href="./index.php?page=suite" <?php if ($_GET['page']=="suite") {echo 'class="selection"';}?>>Suite du projet</a></li>
		<li><a href="./index.php?page=commercialisation" <?php if ($_GET['page']=="commercialisation") {echo 'class="selection"';}?>>Possibilités de commercialisation</a></li>
		<li><a href="./index.php?page=groupe" <?php if ($_GET['page']=="groupe") {echo 'class="selection"';}?>>Qui sommes nous?</a></li>
	</ul> 

	<div class="contenu">
		<div id="divlogo">
			<img src="./img/logo.png" alt="Logo du robot">
		</div>

		<?php
		//On inclut le contenu texte voulu
		switch ($_GET['page']) {
			case "acceuil":
    			include 'txt_acceuil.php';
				break;

			case "conception":
				include 'txt_conception.php';
				break;
			
			case "composition":
				include 'txt_composition.php';
				break;

			case "fonctionnement":
				include 'txt_fonctionnement.php';
				break;
			
			case "suite":
				include 'txt_continuation.php';
				break;

			case "groupe":
				include 'txt_groupe.php';
				break;
			
			case "commercialisation":
				include 'txt_commercialisation.php';
				break;
			
			default:
			include 'txt_default.php';
		}
		?>
	</div>
	
</body>
</html>