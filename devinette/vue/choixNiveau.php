<html>
 <head>
	<title>Choix Niveau</title>
 </head>
 <body>
<header>
	<h1>Jeu du nombre PHP</h1>
</header>
	<form method="post" action="index.php?action=choixNiveau">
		 <p>Niveau 1 : Nombre compris entre 0 et 100</p>
		 <p>Niveau 2 : Nombre compris entre 0 et 1000</p>
		 <p>Niveau 3 : Nombre compris entre 0 et 10000</p>
		 <p>Niveau 4 : Nombre compris entre rand(0,50) et rand(50,100)</p>
	 <table border="0" width="400" align="center">
		<tr>
		 <td width="200">Choisir un niveau</td>
		 <td width="200">
			<input type="number" name="niveau" autofocus>
		 </td>
		</tr>
		<tr>
		 <td width="200">Choisir le nombre d'essai (*optionel)</td>
		 <td width="200"><input type="number" name="nbEssai">
		 </td>
		</tr>
		<tr>
		 <td colspan="2">
			<input type="submit" name="submit" value="valider">
		 </td>
		</tr> 
	 </table>
	</form>

<p> <a href="?action=logout">Se déconnecter</a></p>

 </body>
</html>

