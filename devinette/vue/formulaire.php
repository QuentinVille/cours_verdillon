<!DOCTYPE HTML>
<html>
<head>
  <title>Game</title>
</head>
<body>
<header>
	<h1>Jeu du nombre PHP</h1>
</header>

<div><?php echo $VUE['message'];?></div>

<form method="POST" action="index.php?action=essayer">
   <p> Choisir un nombre <input type="text" name="nombre" value=""/></p>
   <p> <input type="submit"/></p>
   <p> <a href="?action=choixNiveau">Retour au choix du niveau</a></p>
   <p><a href="?action=logout">Se déconnecter</a></p>
</form>
</body>
</html>