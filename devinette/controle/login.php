<?php
require_once("modele/gestion_utilisateurs.php");

	if (empty($_POST["login"]) || empty($_POST["password"])) {
		echo "Entrer un login/mdp";
 
	} else {

		$id = checkUser($_POST["login"]);

		//Si user existe -> Get uset par ID
		if ($id !== FALSE) {
			//Check si mdp est le bon
			$user = loginUser($id[0]->ID,$_POST["password"]);

			if ($user !== FALSE) {
				$_SESSION["session"] = $user;

				//http_redirect()
				header("location: index.php");
				break;
			} else {
				echo "Erreur de login/mdp";
			}

		} else {
			echo "Erreur de login/mdp";
		}
	}

require("vue/login.php");
?>