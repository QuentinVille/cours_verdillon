<!DOCTYPE HTML>
<html>
<head>
  <title>Success</title>
</head>
<body>

<p> Bravo ! vous avez trouvé la solution <?php echo $VUE['solution'];?>
 en <?php echo $VUE['essais'];?> essai(s).
</p>

<?php
require_once("modele/gestion_utilisateurs.php");
ajoutBestScore($_SESSION['session'][0]->ID,$VUE['essais'],$_SESSION['session'][0]->niveau);
?>

<p>Classement</p>

<table border="0" width="400" align="center">
	<tr>
		<td>
			Rang	
		</td>
		<td>
			Username		
		</td>
		<td>
			Niveau		
		</td>
		<td>
			NbEssais		
		</td>
		<td>
			Date	
		</td>
		<td>
			Heure		
		</td>
	</tr>
<?php
	$nbUser = nbUser();
	$classement = classement();
	for ($i=0; $i<=$nbUser-1; $i++) 
	{ 
?>
	<tr>
	<td>
			<?php
				echo $i+1;
			?>		
		</td>
		<td>
			<?php
				echo $classement[$i]->username;
			?>		
		</td>
		<td>
			<?php
				echo $classement[$i]->niveau;
			?>		
		</td>
		<td>
			<?php
				echo $classement[$i]->nbEssais;
			?>		
		</td>
		<td>
			<?php
				echo $classement[$i]->dateTop;
			?>		
		</td>
		<td>
			<?php
				echo $classement[$i]->heure;
			?>		
		</td>
	</tr>
<?php
	} // end for
?>
</table>

<p> <a href="index.php"> rejouer ?</a></p>
<p> <a href="?action=logout">Se déconnecter</a></p>
</form>
</body>
<html>