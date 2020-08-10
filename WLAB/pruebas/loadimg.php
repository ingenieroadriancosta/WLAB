<?php
$filename = "uploads/0.png";
$handle = fopen( $filename, "r" );
$contents = fread($handle, filesize($filename));
fclose($handle);
exit( $contents );
?>
