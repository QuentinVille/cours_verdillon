<?php
function choixNiveau($niveau){
				if ($niveau == 1){
					$min =0;
					$max = 100;
					$_SESSION['session'][0]->niveau = $niveau;
					$_SESSION['session'][0]->solution = rand($min,$max);
					require "controle/debut.php";
				}
				elseif ($niveau == 2){
					$min =0;
					$max = 1000;
					$_SESSION['session'][0]->niveau = $niveau;
					$_SESSION['session'][0]->solution = rand($min,$max);
					require "controle/debut.php";
				}
				elseif ($niveau ==3) {
					$min =0;
					$max = 10000;
					$_SESSION['session'][0]->niveau = $niveau;
					$_SESSION['session'][0]->solution = rand($min,$max);
					require "controle/debut.php";
				}
				elseif ($niveau == 4) {
					$min =rand(0,50);
					$max = rand(50,100);
					$_SESSION['session'][0]->niveau = $niveau;
					$_SESSION['session'][0]->solution = rand($min,$max);
					require "controle/debut.php";
				}
				elseif ($niveau == 99) {
					$min =99;
					$max = 99;
					$_SESSION['session'][0]->niveau = $niveau;
					$_SESSION['session'][0]->solution = rand($min,$max);
					require "controle/debut.php";
				}
				else {
					echo "Erreur dans le choix du niveau ! \nSéléctionnez une valeure entre 1 et 4";
					erreur();
					require "vue/choixNiveau.php";
				}
}

if (isset( $_POST['niveau']) && $_SESSION['ecranChoixNiveau'] >= 0){
	$niveau = $_POST['niveau'];

	if (isset( $_POST['nbEssai']) && $_POST['nbEssai']>1){
	$_SESSION['nbEssai'] = $_POST['nbEssai'];
	// Niveau
	choixNiveau($niveau);			
	}
	elseif ($_POST['nbEssai'] == null) {
		$_SESSION['nbEssai'] = $_POST['nbEssai'];
		choixNiveau($niveau);
	}
	else {
		echo "Erreur dans le choix du nombre d'essais ! Sélécionnez une valeur supérieur à 1";
		$_SESSION['nbEssai'] = 0;
		erreur();
		require "vue/choixNiveau.php";
	}
}
else {
	//echo "Erreur ecran niveau ! ";
	erreur();
	require "vue/choixNiveau.php";
}

function erreur() {
	$_SESSION['ecranChoixNiveau'] = $_SESSION['ecranChoixNiveau']+1;
}

?>