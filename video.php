<?php
include ('init.inc.php');
$mysqliResult = $mysqli->query("SELECT * FROM video WHERE id_video ='1'");
$result = $mysqliResult->fetch_assoc();

$contenu .= '<video src="'.$result['video'].'"></video>'
?>