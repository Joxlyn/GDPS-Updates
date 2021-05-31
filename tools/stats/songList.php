<!DOCTYPE HTML>
<html>
	<head>
		<title>Song List</title>
		<link rel="stylesheet" href="../style.css"/>
	</head>
	
	<body>
		
		
		<div class="smain">
			<table><tr><th>ID</th><th>AltID</th><th>Name</th></tr>
<?php
//error_reporting(0);
include "../../incl/lib/connection.php";
$query = $db->prepare("SELECT ID,name FROM songs WHERE ID >= 0 ORDER BY ID ASC");
$query->execute();
$result = $query->fetchAll();

echo "<p>Count: ".count($result)."</p>";

foreach($result as &$song)
{
	echo "<tr><td>".$song["ID"]."</td><td>".(string)($song["ID"] - 4115655)."</td><td>".htmlspecialchars($song["name"],ENT_QUOTES)."</td></tr>";
}
?>
			</table>
		</div>
	</body>
</html>