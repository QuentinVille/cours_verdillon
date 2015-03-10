<?php
// L'information "trop petit/grand" est passée en variable de session.
// Autre solution: la passer en mode GET
$code= $_SESSION['codeResultat'];
if ($code == "petit") {
  $VUE['message']= "trop petit";
} else if ($code == "grand") {
  $VUE['message']= "trop grand";
}
require("vue/formulaire.php");
