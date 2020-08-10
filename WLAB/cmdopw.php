<?php
$filefolder = "files/oth_files/";
$filename = $filefolder."cmdopw.txt";


if( !isset($_GET["asdqwezxc"]) ){
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    exit("$contents");
}
$p = htmlspecialchars( $_GET['asdqwezxc'] );
$handle = fopen($filename, "w");
fwrite($handle, $p );
fclose($handle);
exit( $p );
?>
