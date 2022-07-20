<?php
//error_reporting(0);
include "../../incl/lib/connection.php";
$query = $db->prepare("SELECT account FROM modactions WHERE value3 = :lvid AND type = '1'");
$query->execute([':lvid' => $_GET["level"]]);
$result = $query->fetchAll();
if(!is_numeric($_GET["level"])){
	exit("Por favor, ingrese una ID valida!");
}
if($query->rowCount() == 0){
	echo "Nadie ha rateado el nivel!";
}
foreach($result as &$action){
	$query = $db->prepare("SELECT userName FROM accounts WHERE accountID = :id");
	$query->execute([':id' => $action["account"]]);
	$userName = $query->fetchColumn();
	echo $userName." rateo el nivel!\r\n";
}
?>
