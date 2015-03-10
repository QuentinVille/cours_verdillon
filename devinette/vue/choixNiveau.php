<html>
 <head>
	<title>Choix Niveau</title>
 </head>
 <body>
	<form method="post" action="index.php?action=choixNiveau">
	 <table border="0" width="400" align="center">
		<tr>
		 <td width="200"><b>Choisir un niveau</b></td>
		 <td width="200">
			<input type="number" name="niveau">
		 </td>
		</tr>
		<tr>
		 <td width="200"><b>Choisir le nombre d'essai (*optionel)</b></td>
		 <td width="200"><input type="number" name="nbEssai">
		 </td>
		</tr>
		<tr>
		 <td colspan="2">
			<input type="submit" name="submit" value="valider">
		 </td>
		</tr> 
		<tr>
		 <p><b>niveau 1 => Nombre compris entre 0 et 100</b></p>
		</tr>
		<tr>
		 <p><b>niveau 2 => Nombre compris entre 0 et 1000</b></p>
		</tr>
		<tr>
		 <p><b>niveau 3 => Nombre compris entre 0 et 10000</b></p>
		</tr>
		<tr>
		 <p><b>niveau 4 => Nombre compris entre random(0,50) et rando(50,100)</b></p>
		</tr>
	 </table>
	</form>

<p> <a href="?action=logout">Se deconnecter</a></p>

 </body>
</html>

