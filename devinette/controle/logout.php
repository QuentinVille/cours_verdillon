<?php
// On �crase le tableau de session
$_SESSION = array();
// On d�truit la session
session_destroy();
header ("location: index.php");
?>