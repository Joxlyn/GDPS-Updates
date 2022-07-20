<html>
	<head>
		<title>Cron Job</title>
		<link rel="stylesheet" href="../style.css"/>
	</head>

	<body>


		<div class="smain nofooter">
<?php
chdir(dirname(__FILE__));
set_time_limit(0);
include "fixcps.php";
ob_flush();
flush();
include "autoban.php";
ob_flush();
flush();
include "friendsLeaderboard.php";
ob_flush();
flush();
include "removeBlankLevels.php";
ob_flush();
flush();
include "songsCount.php";
ob_flush();
flush();
include "fixnames.php";
ob_flush();
flush();
echo "CRON done";
file_put_contents("../logs/cronlastrun.txt",time());
?>
		            </div>
	      </body>
</html>
