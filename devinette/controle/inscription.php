<?php
require_once("modele/gestion_utilisateurs.php");

	if (empty($_POST["login"]) || empty($_POST["password"])) {
		echo "Entrer un login/mdp";

	} else {

		$id = checkUser($_POST["login"]);

		//Si user existe -> Get uset par ID
		if ($id !== FALSE) {
		echo "Erreur! Login déjà utilisé";
		} else {
 			$user = inscription($_POST["nom"],$_POST["prenom"],$_POST["login"],$_POST["password"]);

			if ($user !== FALSE) {
				$_SESSION["session"] = $user;

				//http_redirect()
				header("location: index.php");
				break;
			} else {
				echo "Erreur de login/mdp";
			}
		}
	}

require("vue/inscription.php");
?>