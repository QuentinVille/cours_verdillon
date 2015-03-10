<?php

if (preg_match("/^[0-9]+$/", $_POST['nombre'])) {
    $_SESSION['essais']= $_SESSION['essais']+1;
    $solution= $_SESSION['session'][0]->solution;
    $choix= intval($_POST['nombre']);
    
    if (isset($_SESSION['nbEssai']) &&  $_SESSION['nbEssai'] > $_SESSION['essais']){
		if ($choix < $solution) {
		    // Passage d'information par la session... 
		    // on pourrait aussi passer le code en mode GET.
		    $_SESSION['codeResultat']= "petit";
		    header("Location: index.php?action=resultat");
		} elseif ($choix > $solution) {
		    $_SESSION['codeResultat']= "grand";
		    header("Location: index.php?action=resultat");
		} else {
		    $VUE['essais']= $_SESSION['essais'];
		    $VUE['solution']= $solution;
		    // On pourrait aussi utiliser une redirection.
		    // (en fait ce serait mieux) pour notre cas précis
		    require("vue/success.php");
		}
		
    } elseif (isset($_SESSION['nbEssai']) && $_SESSION['nbEssai'] == '') {
    	if ($choix < $solution) {
		    // Passage d'information par la session... 
		    // on pourrait aussi passer le code en mode GET.
		    $_SESSION['codeResultat']= "petit";
		    header("Location: index.php?action=resultat");
		} elseif ($choix > $solution) {
		    $_SESSION['codeResultat']= "grand";
		    header("Location: index.php?action=resultat");
		} else {
		    $VUE['essais']= $_SESSION['essais'];
		    $VUE['solution']= $solution;
		    // On pourrait aussi utiliser une redirection.
		    // (en fait ce serait mieux) pour notre cas précis
		    require("vue/success.php");
		}
    } else {
    	$VUE['essais']= $_SESSION['essais'];
		$VUE['solution']= $solution;
			require("vue/lose.php");
		}
} else {
    $VUE['nombre']= $_POST['nombre'];
    $VUE['message']= "erreur. Entrez un nombre";
    require("vue/formulaire.php");
}
