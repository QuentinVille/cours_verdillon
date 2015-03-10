<!DOCTYPE HTML>
<html>
<head>
  <title>Lose</title>
</head>
<body>
<header>
	<h1>Jeu du nombre PHP</h1>
</header>

	<p> Perdu ! la solution était <?php echo $VUE['solution'];?>
	<br> vous avez dépasser le nombre d'essai choisie. (<?php echo $VUE['essais'];?> essai(s))</p>

	<p> <a href="index.php"> rejouer ?</a></p>
	<p> <a href="?action=logout">Se déconnecter</a></p>
</body>
<html>