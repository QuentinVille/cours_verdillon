<?php
if (isset( $_POST['niveau'])){
	$niveau = $_POST['niveau'];
}
else {
		$niveau = 0;
		echo "Erreur niveau ! ";
}

// Niveau
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
	require "vue/choixNiveau.php";
}
// nbEssai
if (isset( $_POST['nbEssai'])){
	$_SESSION['nbEssai'] = $_POST['nbEssai'];
}
?>