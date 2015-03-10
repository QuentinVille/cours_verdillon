<?php
session_start();

//error_reporting(E_ALL);
//ini_set("display_errors", 1);

//// premiére action à faire:  un utilisateur est-il connecté ?

//var_dump($_SESSION);
//print_r($_SESSION);
// echo $_SESSION[0]->ID;
// $_SESSION['session'][0]->ID;

if (isset($_SESSION["session"])){
	if (isset($_GET['action'])) {
		$action= $_GET['action'];
	}
	else {
		$action= "choixNiveau";
	}

	switch($action) {
		case "essayer":
			require("controle/essayer.php");
			break;
		case "resultat":
			require("controle/affResultat.php");
			break;
		case "debut":
			require("controle/debut.php");
			break;
		case "logout":
			require("controle/logout.php");
			break;
		case "choixNiveau":
			require("controle/choixNiveau.php");
			break;
		default:
			header ("location: index.php") ;
	}
}
//pas d'utilisateur connecté
else{
/// on teste si on doit traiter une demande de connexion
	if (isset($_GET['action'])) {
		$action= $_GET['action'];
	}
	else {
		$action= "login";
	}

	switch($action) {
		default :
			require("controle/login.php");
			break;
		case 'inscription' :
			require("controle/inscription.php");
			break;
		case 'login' :
			require("controle/login.php");
			break;
	}
}
?>