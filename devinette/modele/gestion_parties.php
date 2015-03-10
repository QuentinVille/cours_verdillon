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

function getNumberGame($id){
	global $connexion;
	$req = $connexion->query('SELECT Count(idGame) FROM game WHERE ID = \''.$id.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

function getLastGame($id){
	global $connexion;

	$last = getNumberGame($id)+1;

	$req = $connexion->query('SELECT * FROM game WHERE ID = \''.$id.'\' AND idGame =\''.$last.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}



function getGame($idGame,$id){
	global $connexion;
	$req = $connexion->query('SELECT * FROM game WHERE idGame = \''.$idGame.'\' AND ID = \''.$id.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

function setGame($idGame,$id,$niveau,$solution,$nbEssais,$gameOn){
	global $connexion;

		$req = $connexion->query('UPDATE game SET niveau =\''.$niveau.'\' WHERE idGame = \''.$idGame.'\' AND ID = \''.$id.'\'');
		$result = $req->fetchAll(PDO::FETCH_OBJ);

		$req1 = $connexion->query('UPDATE game SET solution =\''.$solution.'\' WHERE idGame = \''.$idGame.'\' AND ID = \''.$id.'\'');
	    $result1 = $req1->fetchAll(PDO::FETCH_OBJ);

	    $req2 = $connexion->query('UPDATE game SET nbEssais =\''.$nbEssais.'\' WHERE idGame = \''.$idGame.'\' AND ID = \''.$id.'\'');
	    $result2 = $req2->fetchAll(PDO::FETCH_OBJ);

	    $req3 = $connexion->query('UPDATE game SET gameOn =\''.$gameOn.'\' WHERE idGame = \''.$idGame.'\' AND ID = \''.$id.'\'');
	    $result3 = $req3->fetchAll(PDO::FETCH_OBJ);

	    if (!empty($result) && !empty($result1) && !empty($result2) && !empty($result3)) {
        	return $result+$result1+$result2+$result3;
	    } else {
	        return FALSE;
    	}

}

function createGame($id,$gameOn){
	global $connexion;

	$niveau = 0; $solution = 0; $nbEssais = 0;

	$req = $connexion->query('INSERT INTO game (ID, niveau, solution, nbEssais, gameOn) VALUES (\''.$id.'\', \''.$niveau.'\',\''.$solution.'\',\''.$nbEssais.'\',\''.$gameOn.'\')');
	$req = $connexion->query('SELECT * FROM game WHERE ID = \''.$id.'\'');
	$result = $req->fetchAll(PDO::FETCH_OBJ);
	if (!empty($result)) {
		return $result;
	} else {
		return FALSE;
	}
}

function setGameOff($idGame,$id){
	global $connexion;

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


?>