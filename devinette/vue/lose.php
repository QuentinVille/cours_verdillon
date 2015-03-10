<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>

	<p> Perdu ! la solution était <?php echo $VUE['solution'];?>
	<br> vous avez dépasser le nombre d'essai choisie. (<?php echo $VUE['essais'];?> essai(s))</p>

	<p> <a href="index.php"> rejouer ?</a></p>
	<p> <a href="?action=logout">Se deconnecter</a></p>
</body>
<html>