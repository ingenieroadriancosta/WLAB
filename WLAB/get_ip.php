<?php
$message = "";
$authUser = $_SERVER['REMOTE_ADDR'];
$message = $message . $authUser;


/*/
$tracking_page_name="example";
$agent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo "tracking_page_name: ".$tracking_page_name."<br>";
echo "agent: ".$agent."<br>";
echo "ip: ".$ip."<br>";
echo "host_name: ".$host_name."<br>";
//*/



exit( $message );
?>
