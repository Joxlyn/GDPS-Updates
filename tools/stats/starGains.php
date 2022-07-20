<!DOCTYPE html>
<html>
	<head>
		<title>Star Gains</title>
		<link rel="stylesheet" href="../style.css"/>
	</head>
	
	<body>
		
		
		<div class="smain nofooter">
		
			<h1>Star Gains</h1>
			<p><i><b>NOTE:</b> THIS MAY NOT BE 100% ACCURATE, SO DON'T H4CKUSATE JUST BASED OFF OF INFO GIVEN HERE.</i> unless it's just like really obvious</p>
			
			<form action="">
				<input class="smain" type="text" placeholder="UserID" name="id"><br>
				<input type="submit" value="Go">
			</form>

<?php
include "../../incl/lib/connection.php";

if (!empty($_GET["id"]))
{
	$query = $db->prepare("SELECT userName, isBanned, stars FROM users WHERE userID = :userid");
	$query->execute([':userid' => (int)$_GET["id"]]);
	$u = $query->fetchAll()[0];
	$username = $u['userName'];
	$banned = $u['isBanned'] != 0 ? " (banned)." : ".";
	$stars = $u['stars'];

	echo "<p>Star gains for $username, $stars total stars$banned</p>";

	$query = $db->prepare("SELECT value, timestamp FROM actions WHERE type = 9 AND value <> 0 AND account = :userid ORDER BY timestamp DESC");
	$query->execute([':userid' => (int)$_GET["id"]]);

	echo "<table><tr><th>Time</th><th>Gained</th></tr>";

	foreach ($query->fetchAll() as &$user)
	{
		$stars = $user["value"];
		$time = date("d/m/y H:i:s", $user["timestamp"]);
		
		$col = $stars > 750 ? "500000" : "1ACE59";
		$col = $stars < 0 ? "CC0000" : $col;
		//The second line of $col, in the value of CC0000 should be yellow for some reason, but I changed it to red
		echo "<tr style=\"background-color: #$col\"><td>$time</td><td>$stars</td></tr>";
	}

	echo "</table>";
}

?>
		</div>
	</body>
</html>