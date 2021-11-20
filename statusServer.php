<?php
include "incl/lib/connection.php";
$httpStatusMsg1  = 'Web server is down';
$httpStatusMsg2  = 'Web server is up';
if($maintenanceModeGETSTATUS == 1 OR $maintenanceModeALL == 1){
    $status1 = http_response_code(403);
    echo 'Status: '.$status1.' '.$httpStatusMsg1;
}else{
    $status2 = http_response_code(200);
    echo 'Status: '.$status2.' '.$httpStatusMsg2;
} 
?>