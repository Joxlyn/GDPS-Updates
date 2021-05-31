<!DOCTYPE html>
<html>
	<head>
		<title>Top Week</title>
		<link rel="stylesheet" href="../style.css"/>
	</head>
	
	<body>
		
		
		<div class="smain nofooter">
			<h1>Top Leaderboard Progress</h1>
			
			<table><tr><th>#</th><th>UserID</th><th>UserName</th><th>Stars</th></tr>
<?php
//error_reporting(0);
include "../../incl/lib/connection.php";
$starsgain = array();
$time = time() - 604800;
$x = 0;
$query = $db->prepare("SELECT * FROM actions WHERE type = '9' AND timestamp > :time");
$query->execute([':time' => $time]);
$result = $query->fetchAll();
foreach($result as &$gain){
	if(!empty($starsgain[$gain["account"]])){
		$starsgain[$gain["account"]] += $gain["value"];
	}else{
		$starsgain[$gain["account"]] = $gain["value"];
	}
}
arsort($starsgain);
foreach ($starsgain as $userID => $stars){
	$query = $db->prepare("SELECT userName, isBanned FROM users WHERE userID = :userID");
	$query->execute([':userID' => $userID]);
	$userinfo = $query->fetchAll()[0];
	$username = htmlspecialchars($userinfo["userName"], ENT_QUOTES);
	if($userinfo["isBanned"] == 0){
		$x++;
		echo "<tr><td>$x</td><td>$userID</td><td>$username</td><td>$stars</td></tr>";
	}
}  
?>
			</table>
		</div>
	</body>
</html>