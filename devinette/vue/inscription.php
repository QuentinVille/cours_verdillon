<html>
 <head>
	<title>Inscription</title>
 </head>
 <body>
 <header>
	<h1>Jeu du nombre PHP</h1>
</header>
	<form method="post" action="index.php?action=inscription">
	 <table border="0" width="400" align="center">
		<tr>
		 <td width="200">Nom</td>
		 <td width="200">
			<input type="text" name="nom">
		 </td>
		</tr>
		<tr>
		 <td width="200">Prenom</td>
		 <td width="200">
			<input type="text" name="prenom">
		 </td>
		</tr>
		<tr>
		 <td width="200">Username</td>
		 <td width="200">
			<input type="text" name="login">
		 </td>
		</tr>
		<tr>
		 <td width="200">Mot de passe</td>
		 <td width="200">
			<input type="password" name="password">
		 </td>
		</tr>
		<tr>
		 <td colspan="2">
			<input type="submit" name="submit" value="valider">
		 </td>
		</tr> 
	 </table>
	 <p><a href="?action=login">Se connecter</a></p>
	</form>
 </body>
</html>