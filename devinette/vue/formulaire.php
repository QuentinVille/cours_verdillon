<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>

<div><?php echo $VUE['message'];?></div>

<form method="POST" action="index.php?action=essayer">
   <p> Choisir un nombre <input type="text" name="nombre" value=""/></p>
   <p> <input type="submit"/></p>
   <p><a href="?action=logout">Se deconnecter</a></p>
</form>
</body>
</html>