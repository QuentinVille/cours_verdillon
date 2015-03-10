<?php

	//Constante
	define('DB_HOST','localhost');
	define('DB_NAME','devinette');
	define('DB_LOGIN','devinette');
	define('DB_PASSWORD','perdu');
	define('DB_PATH','modele/devinetteDB.sqlite');


//connexion Sqlite
$connexion = new PDO('sqlite:'.DB_PATH);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//get tt les users
function getAllUser(){
	global $connexion;
	$req = $connexion->query('SELECT * FROM user');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	return $result;
}

//get user par id
function getUser($idUser) {
	global $connexion;
	$req = $connexion->query('SELECT * FROM user WHERE ID ='.$idUser);
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	return $result;
}

//User existe ?
function checkUser($nom) {
	global $connexion;
	$req = $connexion->query('SELECT ID FROM user WHERE username = \''.$nom.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

//Connect l'user avec ID+Password
function loginUser($id,$password) {
	global $connexion;
	$req = $connexion->query('SELECT * FROM user WHERE ID = \''.$id.'\' AND motDePasse =\''.$password.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}
function inscription($nom,$prenom,$username,$motDePasse){
	global $connexion;
	$req = $connexion->query('INSERT INTO user (nom, prenom, username, motDePasse) VALUES (\''.$nom.'\', \''.$prenom.'\',\''.$username.'\',\''.$motDePasse.'\')');
	$req = $connexion->query('SELECT * FROM user WHERE username = \''.$username.'\' AND motDePasse =\''.$motDePasse.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}
function ajoutBestScore($id,$nbEssais,$niveau)
{
	global $connexion;
	$date = date("d/m/y");
	$heure = date("G:i:s");

    $bestScoreSQL = $connexion->query('SELECT nbEssais FROM user WHERE ID = \''.$id.'\'');
    $bestScore = $bestScoreSQL->fetchAll(PDO::FETCH_OBJ)[0]->nbEssais;
    $bestScore = intval($bestScore);

    if ($nbEssais < $bestScore || $bestScore == NULL) {
		$req = $connexion->query('UPDATE user SET nbEssais =\''.$nbEssais.'\' WHERE ID = \''.$id.'\'');
		$result = $req->fetchAll(PDO::FETCH_OBJ);

		$req1 = $connexion->query('UPDATE user SET dateTop =\''.$date.'\' WHERE ID = \''.$id.'\'');
	    $result1 = $req1->fetchAll(PDO::FETCH_OBJ);

	    $req2 = $connexion->query('UPDATE user SET heure =\''.$heure.'\' WHERE ID = \''.$id.'\'');
	    $result2 = $req2->fetchAll(PDO::FETCH_OBJ);

	    $req3 = $connexion->query('UPDATE user SET niveau =\''.$niveau.'\' WHERE ID = \''.$id.'\'');
	    $result3 = $req3->fetchAll(PDO::FETCH_OBJ);

	    if (!empty($result) && !empty($result1) && !empty($result2) && !empty($result3)) {
        	return $result+$result1+$result2+$result3;
	    } else {
	        return FALSE;
    	}
    } 
}

function classement() {
	global $connexion;
	$req = $connexion->query('SELECT username, niveau, nbEssais, dateTop, heure FROM user ORDER BY nbEssais');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

function nbUser() {
	global $connexion;
	$req = $connexion->query('SELECT Count(ID) AS nbUser FROM user');
	$result = $req->fetchAll(PDO::FETCH_OBJ)[0];
	$result = $result->nbUser;
	$result = intval($result);

	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

?>